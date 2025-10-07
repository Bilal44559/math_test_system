<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Health',
                'tagline' => 'Your health, our priority',
                'short_description' => 'All about health-related services and products.',
                'background_image' => 'images/categories/health.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fitness',
                'tagline' => 'Shape your body, shape your life',
                'short_description' => 'Everything you need for fitness and training.',
                'background_image' => 'images/categories/fitness.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Wellness',
                'tagline' => 'Relax and rejuvenate',
                'short_description' => 'Spa, massage, and mental wellness services.',
                'background_image' => 'images/categories/wellness.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
