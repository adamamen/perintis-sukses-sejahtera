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
}
