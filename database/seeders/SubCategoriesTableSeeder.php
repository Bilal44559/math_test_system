<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Category;

class SubCategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure at least one category exists
        $category = Category::first() ?? Category::create([
            'name' => 'Default Category',
            'tagline' => 'Tagline for default category',
            'short_description' => 'This is a default category description.',
            'background_image' => 'images/categories/default.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('sub_categories')->insert([
            [
                'name' => 'Skin Treatment',
                'title' => 'Advanced Skin Treatment',
                'category_id' => $category->id,
                'short_description' => 'Improves skin texture and glow.',
                'tagline' => 'Glowing skin starts here',
                'price' => '1500',
                'price_tagline' => 'Per session',
                'background_image' => 'images/subcategories/skin.jpg',
                'order_bit' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Detox Therapy',
                'title' => 'Full Body Detox',
                'category_id' => $category->id,
                'short_description' => 'Cleanse your body from within.',
                'tagline' => 'Feel light and healthy',
                'price' => '2500',
                'price_tagline' => 'Special package',
                'background_image' => 'images/subcategories/detox.jpg',
                'order_bit' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
