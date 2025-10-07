<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CategoryApiService
{
    public function getCategoriesWithSubcategories()
    {
        $rawData = DB::table('categories')
            ->leftJoin('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
            ->select(
                'categories.id as category_id',
                'categories.name as category_name',
                'categories.tagline as category_tagline',
                'categories.short_description as category_short_description',
                'categories.background_image as category_background_image',
                'sub_categories.id as sub_cat_id',
                'sub_categories.name as sub_name',
                'sub_categories.title as sub_title',
                'sub_categories.tagline as sub_tagline',
                'sub_categories.price as sub_price',
                'sub_categories.price_tagline as sub_price_tagline',
                'sub_categories.short_description as sub_short_description',
                'sub_categories.category_id as sub_category_id',
                'sub_categories.background_image as sub_background_image',
                'sub_categories.order_bit as order_bit'
            )
            ->orderBy('categories.id')
            ->get();

        $grouped = [];

        foreach ($rawData as $item) {
            $categoryKey = $item->category_id;

            if (!isset($grouped[$categoryKey])) {
                $grouped[$categoryKey] = [
                    'category_name' => $item->category_name,
                    'tagline' => $item->category_tagline,
                    'short_description' => $item->category_short_description,
                    'background_image' => $item->category_background_image,
                    'subcategories' => []
                ];
            }

            if ($item->sub_name) {
                $grouped[$categoryKey]['subcategories'][] = [
                    'id' => $item->sub_cat_id,
                    'name' => $item->sub_name,
                    'title' => $item->sub_title,
                    'tagline' => $item->sub_tagline,
                    'price' => $item->sub_price,
                    'price_tagline' => $item->sub_price_tagline,
                    'short_description' => $item->sub_short_description,
                    'category_id' => $item->sub_category_id,
                    'background_image' => $item->sub_background_image,
                    'order_bit' => $item->order_bit
                ];
            }
        }

        return array_values($grouped);
    }
}
