<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class OwnerBrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('owner.pages.brand.index', [
            'type_menu' => 'company',
            'brands' => $brands
        ]);
    }

    public function create()
    {
        return view('owner.pages.brand.create', [
            'type_menu' => 'company'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:brand'],
            'url' => ['required', 'alpha_dash', 'unique:brand'],
            'logo_picture' => ['required', 'mimes:jpeg,png,gif'],
            'logo_picture2' => ['required', 'mimes:jpeg,png,gif'],
            'banner_picture' => ['required', 'mimes:jpeg,png,gif'],
        ]);

        $brand = new Brand();

        $final_name = 'brand_' . time() . '.' . $request->logo_picture->extension();
        $request->logo_picture->move(public_path('uploads'), $final_name);
        $brand->logo_picture = $final_name;

        $final_name2 = 'brand_' . time() . '.' . $request->logo_picture2->extension();
        $request->logo_picture2->move(public_path('uploads'), $final_name2);
        $brand->logo_picture2 = $final_name2;

        $final_name3 = 'brand_' . time() . '.' . $request->banner_picture->extension();
        $request->banner_picture->move(public_path('uploads'), $final_name3);
        $brand->banner_picture = $final_name3;

        $brand->name = $request->name;
        $brand->url = strtolower($request->url);
        $brand->is_own = $request->is_own;
        $brand->save();

        return redirect()->route('owner.brand')->with('success', __('Data is added successfully'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        return view('owner.pages.brand.edit', [
            'type_menu' => 'company',
            'brand' => $brand
        ]);
    }
}
