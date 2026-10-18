<?php

namespace App\Console\Commands;

use App\Models\MealPlan;
use App\Models\MealPlanNotification;
use App\Services\FCMService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MealPlanReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meal-plans:remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send meal reminders based on meal plan date and meal time.';

    public function handle(): int
    {
        // Build the current date and exact minute (00 seconds) used for reminder matching.
        $now = Carbon::now();
        $today = $now->toDateString();
        $currentMinuteTime = $now->copy()->startOfMinute()->format('H:i');

        // Load only active plans for today that have at least one item at this exact minute.
        $mealPlans = MealPlan::query()
            ->with([
                'user:id,fcm_token',
                'items' => function ($query) use ($currentMinuteTime) {
                    $query->with('meal:id,title')
                        ->whereNotNull('meal_time')
                        ->whereTime('meal_time', '=', $currentMinuteTime);
                },
            ])
            ->where('notification_status', 'active')
            ->whereDate('plan_date', $today)
            ->whereHas('items', function ($query) use ($currentMinuteTime) {
                $query->whereNotNull('meal_time')
                    ->whereTime('meal_time', '=', $currentMinuteTime);
            })
            ->get();

        if ($mealPlans->isEmpty()) {
            $todayMealTimes = MealPlan::query()
                ->with(['items:id,meal_plan_id,meal_name,meal_time'])
                ->where('notification_status', 'active')
                ->whereDate('plan_date', $today)
                ->get()
                ->flatMap(function ($plan) {
                    return $plan->items->map(function ($item) use ($plan) {
                        return [
                            'meal_plan_id' => $plan->id,
                            'meal_plan_item_id' => $item->id,
                            'meal_name' => $item->meal_name,
                            'meal_time' => $item->meal_time?->format('H:i:s'),
                        ];
                    });
                })
                ->values();

            Log::info('Meal reminder: no meal plans matched for current time window.', [
                'current_minute_time' => $currentMinuteTime,
                'today' => $today,
                'today_scheduled_items' => $todayMealTimes,
            ]);

            return Command::SUCCESS;
        }

        $fcmService = app(FCMService::class);

        foreach ($mealPlans as $mealPlan) {
            // Skip invalid recipients early to keep the command resilient.
            $user = $mealPlan->user;
            if (! $user) {
                Log::info('Meal reminder skipped: user not found.', [
                    'meal_plan_id' => $mealPlan->id,
                ]);
                continue;
            }

            if (empty($user->fcm_token)) {
                Log::info('Meal reminder skipped: missing FCM token.', [
                    'meal_plan_id' => $mealPlan->id,
                    'user_id' => $user->id,
                ]);
                continue;
            }

            foreach ($mealPlan->items as $item) {
                // Prepare notification content and payload from slot + linked meal metadata.
                $mealSlot = $item->meal_name ?: 'Meal';
                $linkedMealName = $item->meal?->title;
                $title = 'Meal Reminder';
                // push notification body properties
                $body = $linkedMealName
                    ? "Your {$mealSlot}: {$linkedMealName} is scheduled now."
                    : "Your {$mealSlot} is scheduled now.";

                $data = [
                    'meal_plan_id' => (string) $mealPlan->id,
                    'meal_plan_item_id' => (string) $item->id,
                    'meal_name' => (string) ($item->meal_name ?? ''),
                    'meal_time' => (string) ($item->meal_time?->format('H:i') ?? ''),
                    'meal_id' => (string) ($item->meal_id ?? ''),
                    'meal_title' => (string) ($linkedMealName ?? ''),
                    'plan_date' => (string) $mealPlan->plan_date,
                ];

                try {
                    // Send push first; if push fails, do not persist a notification record.
                    $fcmService->sendToMultipleTokens([$user->fcm_token], $title, $body, $data);
                    Log::info('Meal reminder push sent.', [
                        'meal_plan_id' => $mealPlan->id,
                        'meal_plan_item_id' => $item->id,
                        'user_id' => $user->id,
                        'meal_name' => $item->meal_name,
                        'meal_time' => $item->meal_time?->format('H:i'),
                        'meal_id' => $item->meal_id,
                        'meal_title' => $linkedMealName,
                    ]);
                } catch (\Throwable $e) {
                    Log::warning('Meal reminder push failed.', [
                        'meal_plan_id' => $mealPlan->id,
                        'meal_plan_item_id' => $item->id,
                        'user_id' => $user->id,
                        'reason' => $e->getMessage(),
                    ]);
                    continue;
                }

                try {
                    // Persist successfully-sent notifications for in-app history and read tracking.
                    $notification = MealPlanNotification::create([
                        'user_id' => $user->id,
                        'meal_plan_id' => $mealPlan->id,
                        'meal_plan_item_id' => $item->id,
                        'meal_id' => $item->meal_id,
                        'meal_name' => $item->meal_name,
                        'meal_title' => $linkedMealName,
                        'meal_time' => $item->meal_time?->format('H:i'),
                        'sent_at' => $now,
                    ]);

                    Log::info('Meal plan notification created.', [
                        'notification_id' => $notification->id,
                        'meal_plan_id' => $mealPlan->id,
                        'meal_plan_item_id' => $item->id,
                        'user_id' => $user->id,
                        'meal_name' => $item->meal_name,
                        'meal_time' => $item->meal_time?->format('H:i'),
                        'meal_id' => $item->meal_id,
                        'meal_title' => $linkedMealName,
                    ]);
                } catch (\Throwable $e) {
                    Log::warning('Meal plan notification create failed.', [
                        'meal_plan_id' => $mealPlan->id,
                        'meal_plan_item_id' => $item->id,
                        'user_id' => $user->id,
                        'reason' => $e->getMessage(),
                        'payload' => [
                            'meal_name' => $item->meal_name,
                            'meal_time' => $item->meal_time?->format('H:i'),
                            'meal_id' => $item->meal_id,
                            'meal_title' => $linkedMealName,
                        ],
                    ]);
                }
            }
        }

        return Command::SUCCESS;
    }
}
