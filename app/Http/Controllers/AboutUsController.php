<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class AboutUsController extends Controller
{
    public function index()
    {
        $title = 'About Us - Perintis Sukses Sejahtera';
        $data  = CompanyProfile::all();

        return view('about_us.index', [
            'type_menu' => 'about_us',
            'title'     => $title,
            'data'      => $data
        ]);
    }
}
