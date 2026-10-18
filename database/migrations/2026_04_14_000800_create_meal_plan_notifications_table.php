<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meal_plan_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('meal_plan_id')->nullable()->constrained('meal_plans')->nullOnDelete();
            $table->foreignId('meal_plan_item_id')->nullable()->constrained('meal_plan_items')->nullOnDelete();
            $table->unsignedBigInteger('meal_id')->nullable();
            $table->string('meal_name')->nullable();
            $table->string('meal_title')->nullable();
            $table->string('meal_time')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamp('read_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();

            $table->index(['meal_plan_id', 'meal_plan_item_id']);
            $table->index('user_id');
            $table->index('is_read');
            $table->index('sent_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plan_notifications');
    }
};
