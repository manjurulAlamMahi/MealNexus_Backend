<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MealPlanDateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $mealItems = $this->items->filter(fn($item) => !is_null($item->meal_id));
        $totalMealCount = $mealItems->count();
        $totalMealCalories = $mealItems->sum(function ($item) {
            return (int) ($item->meal->calories ?? 0);
        });

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'plan_date' => $this->plan_date?->toDateString(),
            'summary' => [
                'set_calories' => $this->set_calories,
                'total_meal_count' => $totalMealCount,
                'total_meal_calories' => $totalMealCalories,
            ],
            'items' => $this->items->map(fn($item) => [
                'id' => $item->id,
                'meal_name' => $item->meal_name,
                'meal_time' => $item->meal_time,
                'meal_id' => $item->meal_id,
                'meal_title' => $item->meal?->title,
                'meal_image' => $item->meal?->image,
                'meal_calories' => $item->meal?->calories,
            ])->values(),
        ];
    }
}
