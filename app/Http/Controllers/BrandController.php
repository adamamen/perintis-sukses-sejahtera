<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $title = 'Brand - Perintis Sukses Sejahtera';

        return view('brand.index', [
            'type_menu' => 'brand',
            'title'     => $title
        ]);
    }
}
