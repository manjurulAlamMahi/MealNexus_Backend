<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $isAuthenticated = auth('api')->check();

        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'image'        => $this->image,
            'time'         => $this->time,
            'calories'     => $this->calories,
            'meal_type'    => $this->meal_type,
            'added_meal'   => $isAuthenticated ? (bool) ($this->added_meal ?? false) : false,
            'is_favourite' => $isAuthenticated ? (bool) ($this->is_favourite ?? false) : false,
        ];
    }
}
