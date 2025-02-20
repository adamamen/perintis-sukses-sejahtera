<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'type_menu' => 'home'
        ]);
    }

    public function explore_products()
    {
        return view('home.list_product', [
            'type_menu' => 'explore_product'
        ]);
    }

    public function product($page)
    {
        // dd('1');
        return view('home.product', [
            'type_menu' => 'explore_product',
            'page' => $page
        ]);
        // return view('home.product', compact('slug'));
    }
}
