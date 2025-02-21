<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $title = 'Brand - Perintis Sukses Sejahtera';

        return view('contact_us.index', [
            'type_menu' => 'contact_us',
            'title'     => $title
        ]);
    }
}
