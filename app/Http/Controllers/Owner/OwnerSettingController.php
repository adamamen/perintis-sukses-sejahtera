<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class OwnerSettingController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $setting = Setting::find(1);
        return view('owner.pages.setting.general', [
            'type_menu' => 'setting-general',
            'setting' => $setting
        ]);
    }

    public function update(Request $request) {}
}
