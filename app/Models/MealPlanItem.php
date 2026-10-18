<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MealPlanItem extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'meal_plan_id',
        'meal_name',
        'meal_time',
        'meal_id',
    ];

    /**
     * Attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'meal_time' => 'datetime:H:i',
    ];

    /**
     * Get parent meal plan header.
     */
    public function mealPlan(): BelongsTo
    {
        return $this->belongsTo(MealPlan::class, 'meal_plan_id');
    }

    /**
     * Get linked meal when this item is selected from meal library.
     */
    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class, 'meal_id');
    }

    /**
     * Get all notification rows created for this meal plan item.
     */
    public function notifications(): HasMany
    {
        return $this->hasMany(MealPlanNotification::class, 'meal_plan_item_id')->orderByDesc('id');
    }
}
