<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PillarsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pillars')->insert([
            [
                'name' => 'Health',
                'tagline' => 'Your body, your temple',
                'short_description' => 'Focus on physical and mental well-being.',
                'background_image' => 'images/pillars/health.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Growth',
                'tagline' => 'Keep evolving',
                'short_description' => 'Personal and professional growth opportunities.',
                'background_image' => 'images/pillars/growth.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Community',
                'tagline' => 'Together we rise',
                'short_description' => 'Build meaningful relationships and support systems.',
                'background_image' => 'images/pillars/community.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
