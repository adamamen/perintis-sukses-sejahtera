<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home - Perintis Sukses Sejahtera';
        $setting = Setting::find(1);
        return view('frontend.pages.home.index', [
            'type_menu' => 'home',
            'title'     => $title,
            'Setting' => $setting
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
