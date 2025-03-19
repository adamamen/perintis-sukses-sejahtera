<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = 'Brand - Perintis Sukses Sejahtera';

        return view('shop.index', [
            'type_menu' => 'brand',
            'title'     => $title
        ]);
    }

    public function detail()
    {
        $title = 'Brand - Perintis Sukses Sejahtera';

        return view('shop.detail', [
            'type_menu' => 'brand',
            'title'     => $title
        ]);
    }
}
