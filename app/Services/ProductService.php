<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts($type)
    {
        $products = Product::where('product_type', $type)->with('images', 'addons', 'product_benafits', 'additional_benefits', 'popups')->get();

        return $products->isEmpty() ? null : $products;
    }

    public function getProductById($id)
    {
        $product = Product::with('images', 'addons', 'product_benafits', 'additional_benefits', 'popups')->find($id);

        return $product ?: null;
    }
}
