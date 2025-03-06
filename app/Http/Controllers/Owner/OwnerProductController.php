<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class OwnerProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('owner.pages.product.index', [
            'type_menu' => 'company',
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('owner.pages.product.edit', [
            'type_menu' => 'company',
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}
