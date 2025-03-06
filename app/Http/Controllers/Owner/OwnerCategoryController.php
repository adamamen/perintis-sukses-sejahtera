<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Product;

class OwnerCategoryController extends Controller
{
    public function index()
    {
        // $product = Product::all();
        return view('owner.pages.category.index', [
            'type_menu' => 'company'
        ]);
    }
}
