<?php

namespace App\Services;

use App\Models\Category;
use App\Models\SubCategory;

class CategoryService
{
    public function getAllCategories()
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            return null;
        }

        return $categories;
    }

    public function getSubCategoriesByCategoryId($categoryId)
    {

        $subcategories = SubCategory::with('metatag')->where('category_id', $categoryId)->get();

        return $subcategories->isEmpty() ? null : $subcategories;
    }
}
