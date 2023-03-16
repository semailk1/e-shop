<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index');
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:brands,name|min:1|max:255',
            'logo' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            $logoPath = 'storage/' . $logo->store('logos', 'public');
        }

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->logo = $logoPath;
        $brand->save();

        return redirect()->route('admin.brands');
    }

    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $rules = [
            'name' => ['required',Rule::unique('brands')->ignore($brand->id, 'id'),'min:1','max:255'],
            'logo' => 'mimes:jpg,jpeg,png,bmp,tiff|max:4096',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            $logoPath = 'storage/' . $logo->store('logos', 'public');

            if (File::exists($brand->logo)) {
                File::delete($brand->logo);
            }
            $brand->logo = $logoPath;
        }


        $brand->name = $request->name;

        $brand->save();

        return redirect()->route('admin.brand.edit', $brand->id);
    }

    public function delete(Brand $brand)
    {
        $brand->delete();
        return redirect()->back();
    }
}
