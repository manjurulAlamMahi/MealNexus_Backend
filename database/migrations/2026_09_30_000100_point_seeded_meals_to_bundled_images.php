<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * public/uploads is git-ignored, so the original meal photos never reach the server.
     * Point the seeded meals at the photos committed in public/frontend/meals instead.
     * Only rows still using the original upload path are touched.
     */
    private array $images = [
        'uploads/meals/1788062194-avocado-toast-poached-eggsjpg.jpg'   => 'frontend/meals/avocado-toast-poached-eggs.jpg',
        'uploads/meals/1788062182-greek-yogurt-berry-parfaitjpg.jpg'   => 'frontend/meals/greek-yogurt-berry-parfait.jpg',
        'uploads/meals/1788062170-banana-oat-protein-pancakesjpg.jpg'  => 'frontend/meals/banana-oat-protein-pancakes.jpg',
        'uploads/meals/1788062155-grilled-chicken-caesar-saladjpg.jpg' => 'frontend/meals/grilled-chicken-caesar-salad.jpg',
        'uploads/meals/1788062133-chicken-burrito-bowljpg.jpg'         => 'frontend/meals/chicken-burrito-bowl.jpg',
        'uploads/meals/1788062119-mediterranean-quinoa-bowljpg.jpg'    => 'frontend/meals/mediterranean-quinoa-bowl.jpg',
        'uploads/meals/1788062106-spaghetti-bolognesejpg.jpg'          => 'frontend/meals/spaghetti-bolognese.jpg',
        'uploads/meals/1788062084-baked-salmon-asparagusjpg.jpg'       => 'frontend/meals/baked-salmon-asparagus.jpg',
        'uploads/meals/1788062071-beef-broccoli-stir-fryjpg.jpg'       => 'frontend/meals/beef-broccoli-stir-fry.jpg',
        'uploads/meals/1788062053-thai-green-chicken-curryjpg.jpg'     => 'frontend/meals/thai-green-chicken-curry.jpg',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach ($this->images as $old => $new) {
            DB::table('meals')->where('image', $old)->update(['image' => $new]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach ($this->images as $old => $new) {
            DB::table('meals')->where('image', $new)->update(['image' => $old]);
        }
    }
};
