<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\SubCategory;

class PagecontentTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure there is at least one sub-category
        $subCategory = SubCategory::first() ?? SubCategory::create([
            'name' => 'Default SubCategory',
            'slug' => 'default-subcategory',
            'category_id' => 1, // You can adjust this if needed
        ]);

        DB::table('pagecontent')->insert([
            [
                'title' => 'Welcome to Our Service',
                'sub_title' => 'Discover amazing features',
                'paragraphs' => '<p>This is a full paragraph with <strong>HTML</strong> support.</p>',
                'bullet_points' => json_encode(['Fast', 'Reliable', 'Affordable']),
                'images' => json_encode([
                    'images/page1.jpg',
                    'images/page2.jpg'
                ]),
                'sub_category_id' => $subCategory->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Why Choose Us',
                'sub_title' => 'Top reasons to pick our services',
                'paragraphs' => '<p>We provide 24/7 customer support and best-in-class solutions.</p>',
                'bullet_points' => json_encode(['24/7 Support', 'Secure', 'Trusted by 10k+']),
                'images' => json_encode([
                    'images/support.jpg',
                    'images/security.jpg'
                ]),
                'sub_category_id' => $subCategory->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
