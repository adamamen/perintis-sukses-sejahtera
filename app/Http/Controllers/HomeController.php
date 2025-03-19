<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home - Perintis Sukses Sejahtera';

        return view('frontend.pages.home.index', [
            'type_menu' => 'home',
            'title'     => $title
        ]);
    }

    public function explore_products()
    {
        $title = 'Explore Products - Perintis Sukses Sejahtera';

        return view('home.list_product', [
            'type_menu' => 'explore_product',
            'title'     => $title
        ]);
    }

    public function product()
    {
        $title = 'Product - Perintis Sukses Sejahtera';

        return view('home.product', [
            'type_menu' => 'explore_product',
            'title'     => $title
        ]);
    }
}
