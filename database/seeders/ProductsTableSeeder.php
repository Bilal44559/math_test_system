<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure at least one category exists
        $category = Category::first() ?? Category::create([
            'name' => 'Default Category',
            'tagline' => 'Tagline here',
            'short_description' => 'Default category description',
            'background_image' => 'images/categories/default.jpg',
        ]);

        DB::table('products')->insert([
            [
                'title' => 'Vitamin C Injection',
                'subtitle' => 'Immunity booster',
                'price' => 1500.00,
                'short_description' => 'Short description about Vitamin C Injection',
                'description' => 'Detailed description of the product goes here...',
                'image' => 'images/products/vitamin_c.jpg',
                'is_active' => 1,
                'category_id' => $category->id,
                'add_on_name' => 'Consultation',
                'add_on_price' => '500',
                'image2' => 'images/products/vitamin_c_2.jpg',
                'add_adbenafits_name' => 'Energy Boost, Skin Glow',
                'add_adbenefit_description' => 'Gives a quick energy boost and improves skin texture.',
                'popup_name' => 'Vitamin C Alert',
                'product_type' => 'injection',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Glutathione Injection',
                'subtitle' => 'Skin whitening treatment',
                'price' => 2500.00,
                'short_description' => 'Used for detox and skin whitening.',
                'description' => 'Glutathione is a powerful antioxidant...',
                'image' => 'images/products/glutathione.jpg',
                'is_active' => 1,
                'category_id' => $category->id,
                'add_on_name' => 'Doctor Supervision',
                'add_on_price' => '700',
                'image2' => 'images/products/glutathione_2.jpg',
                'add_adbenafits_name' => 'Detox, Whitening',
                'add_adbenefit_description' => 'Supports liver function and enhances skin clarity.',
                'popup_name' => 'Usage Instructions',
                'product_type' => 'injection',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
