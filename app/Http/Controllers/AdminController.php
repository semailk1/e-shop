<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.login');
    }

    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->email == config('admin.email')) {
                return redirect()->route('admin.users');
            }
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        if (config('admin.email') != $request->email || config('admin.password') != $request->password) {
            return redirect()->back();
        }

        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('product.index');
        }

        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login' => 'These credentials dont match our records'
            ]);
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function products()
    {
        $products = Product::with(['brand', 'category'])->paginate(10);

        return view('admin.products', compact('products'));
    }

    public function productCreate()
    {
        return view('admin.product-create');
    }

    public function productEdit(Product $product)
    {
        return view('admin.product-edit', compact('product'));
    }

    public function productStore(Request $request)
    {
        $rules = [
            'article' => 'required|unique:products,article|numeric',
            'title' => 'required|min:1|max:255',
            'price' => 'required',
            'category_id' => 'required|numeric|exists:categories,id',
            'brand_id' => 'required|numeric|exists:brands,id',
            'images.*' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'description' => 'required|min:10|max:5000',
            'purchase_price' => 'required',
            'discount' => 'required',
            'quantity' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $images = $request->file('images');
        foreach ($images as $image) {
            $filename[] = 'storage/' . $image->store('images', 'public');
        }
        $newProduct = new Product();
        $newProduct->images = $filename;
        $newProduct->title = $request->title;
        $newProduct->price = $request->price;
        $newProduct->article = $request->article;
        $newProduct->category_id = $request->category_id;
        $newProduct->brand_id = $request->brand_id;
        $newProduct->discount = $request->discount;
        $newProduct->purchase_price = $request->purchase_price;
        $newProduct->quantity = $request->quantity;
        $newProduct->description = $request->description;
        $newProduct->save();

        return redirect()->back()->with(['success' => 'Saved!']);
    }

    public function productUpdate(Request $request, Product $product)
    {
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $filename[] = 'storage/' . $image->store('images', 'public');
            }
            $product->images = array_merge($filename, $product->images);
        }

        if ($request->images_remove) {
            $imagesRemove = Arr::only($product->images, $request->images_remove);
            if (count(Arr::except($product->images, $request->images_remove)) > 1) {
                $product->images = Arr::except($product->images, $request->images_remove);
                Arr::map($imagesRemove, function ($value, $key) {
                    if (File::exists($value)) {
                        File::delete($value);
                    }
                });
            }
        }

        $product->title = $request->title;
        $product->price = $request->price;
        $product->article = $request->article;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->discount = $request->discount;
        $product->purchase_price = $request->purchase_price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();

        return redirect()->back();
    }
}
