<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\MealPlanNotification;
use Illuminate\Http\Request;

class MealNotificationController extends Controller
{
    /**
     * Get all notifications for authenticated user.
     *
     * Query params:
     * - per_page: int (optional, default 10, max 100)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function allNotifications(Request $request)
    {
        try {
            $user = auth('api')->user();

            if (! $user) {
                return jsonErrorResponse('Unauthorized', 401);
            }

            $perPage = (int) $request->input('per_page', 10);
            $perPage = max(1, min($perPage, 100));

            $notifications = MealPlanNotification::query()
                ->where('user_id', $user->id)
                ->latest('id')
                ->paginate($perPage);

            $rows = NotificationResource::collection($notifications->items())
                ->collection
                ->map(fn($notification) => $notification->toArray($request))
                ->values();

            return jsonResponse(
                true,
                'Meal notifications retrieved successfully',
                200,
                [
                    'total_count' => $notifications->total(),
                    'notifications' => $rows,
                ],
                true,
                $notifications
            );
        } catch (\Throwable $e) {
            return jsonErrorResponse('Failed to retrieve notifications', 500, [
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Delete a single notification for authenticated user.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $user = auth('api')->user();

            if (! $user) {
                return jsonErrorResponse('Unauthorized', 401);
            }

            $notification = MealPlanNotification::query()
                ->where('user_id', $user->id)
                ->where('id', $id)
                ->first();

            if (! $notification) {
                return jsonErrorResponse('Notification not found', 404);
            }

            $notification->delete();

            return jsonResponse(true, 'Notification deleted successfully', 200, [
                'id' => $id,
            ]);
        } catch (\Throwable $e) {
            return jsonErrorResponse('Failed to delete notification', 500, [
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Mark a single notification as read for authenticated user.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAsRead(int $id)
    {
        try {
            $user = auth('api')->user();

            if (! $user) {
                return jsonErrorResponse('Unauthorized', 401);
            }

            $notification = MealPlanNotification::query()
                ->where('user_id', $user->id)
                ->where('id', $id)
                ->first();

            if (! $notification) {
                return jsonErrorResponse('Notification not found', 404);
            }

            $notification->update([
                'is_read' => true,
                'read_at' => now(),
            ]);

            return jsonResponse(true, 'Notification marked as read successfully', 200, [
                'id' => $notification->id,
                'is_read' => (bool) $notification->is_read,
                'read_at' => $notification->read_at,
            ]);
        } catch (\Throwable $e) {
            return jsonErrorResponse('Failed to mark notification as read', 500, [
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Mark all unread notifications as read for authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAllAsRead()
    {
        try {
            $user = auth('api')->user();

            if (! $user) {
                return jsonErrorResponse('Unauthorized', 401);
            }

            $updatedCount = MealPlanNotification::query()
                ->where('user_id', $user->id)
                ->where(function ($query) {
                    $query->where('is_read', false)
                        ->orWhereNull('read_at');
                })
                ->update([
                    'is_read' => true,
                    'read_at' => now(),
                ]);

            return jsonResponse(true, 'All unread notifications marked as read successfully', 200, [
                'updated_count' => $updatedCount,
            ]);
        } catch (\Throwable $e) {
            return jsonErrorResponse('Failed to mark all notifications as read', 500, [
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Delete all notifications of authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroyAll()
    {
        try {
            $user = auth('api')->user();

            if (! $user) {
                return jsonErrorResponse('Unauthorized', 401);
            }

            $deletedCount = MealPlanNotification::query()
                ->where('user_id', $user->id)
                ->delete();

            return jsonResponse(true, 'All notifications removed successfully', 200, [
                'deleted_count' => $deletedCount,
            ]);
        } catch (\Throwable $e) {
            return jsonErrorResponse('Failed to remove all notifications', 500, [
                'error' => $e->getMessage(),
            ]);
        }
    }
}
