<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $title = 'About Us - Perintis Sukses Sejahtera';

        return view('about_us.index', [
            'type_menu' => 'about_us',
            'title'     => $title
        ]);
    }
}
