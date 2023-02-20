<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if (!empty($request->decodedPath()) || $request->get('search')) {
            if ($request->decodedPath() !== '/'){
            $sortByIdsProducts = DB::table('products as p')
                ->select('p.id')
                ->join('brands as b', 'b.id', '=', 'p.brand_id')
                ->join('categories as c', 'c.id', '=', 'p.category_id')
                ->where('b.name', '=', $request->decodedPath())
                ->orWhere('c.name', '=', $request->decodedPath())
                ->orWhere('p.title', 'LIKE', '%' . $request->get('search') . '%')
                ->where('p.brand_id', '=', $request->decodedPath())
                ->get()->pluck('id')->toArray();

            $products = Product::query()->whereIn('id', $sortByIdsProducts)->paginate(16);

            return view('index', compact('products'));
            }
        }

        $products = Product::query()->paginate(16);

        return view('index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('product-details', compact('product'));
    }

    public function filter(Request $request)
    {
        $priceBetween = explode('-', str_replace('$', '', trim(str_replace(" ", "", $request->price))));

        if ($request->price) {
            Session::put('price-filter', $priceBetween);
        }

        $products = Product::query()->whereBetween('price', Session::get('price-filter'))->paginate(16);

        return view('index', compact('products'));
    }
}
