<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'meal_plan_id' => $this->meal_plan_id,
            // 'meal_plan_item_id' => $this->meal_plan_item_id,
            'meal_name' => $this->meal_name,
            'meal_time' => $this->meal_time,
            'meal_id' => $this->meal_id,
            'meal_title' => $this->meal_title,
            'read_at' => $this->read_at,
            'sent_at' => $this->sent_at,
            'is_read' => (bool) $this->is_read,
        ];
    }
}
