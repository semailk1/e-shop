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
            $sortByIdsProducts = DB::table('products as p')
                ->select('p.id')
                ->join('brands as b', 'b.id', '=', 'p.brand_id')
                ->join('categories as c', 'c.id', '=', 'p.category_id')
                ->where('b.name', '=', $request->decodedPath())
                ->orWhere('c.name', '=', $request->decodedPath())
                ->orWhere('p.title', 'LIKE', '%' . $request->get('search') . '%')
                ->get()->pluck('id')->toArray();

            $products = Product::query()->whereIn('id', $sortByIdsProducts)->paginate(16);


            return view('index', compact('products'));
        }

        $products = Product::query()->paginate(16);

        return view('index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('product-details', compact('product'));
    }
}
