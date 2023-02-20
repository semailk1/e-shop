<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        if (Session::has('cart')) {
            $cart = Product::query()->whereIn('id', Session::get('cart'))->get();
            return view('cart', compact('cart'));
        }

        $cart = [];
        return view('cart', compact('cart'));
    }

    public function cartRemove(Request $request)
    {
        $cart = Session::get('cart');
        unset($cart[array_search($request->id, $cart)]);
        Session::put('cart', $cart);

        return response()->json('Удаленно из корзины!');
    }

    public function wishlist()
    {
        if (Session::has('favorites')) {
            $favorites = Product::query()->whereIn('id', Session::get('favorites'))->get();

            return view('wishlist', compact('favorites'));
        }

        $favorites = [];
        return view('wishlist', compact('favorites'));
    }

    public function cartAdd(Request $request)
    {
        $cart = Session::has('cart') ? Session::get('cart') : [];
        if (in_array($request->id, $cart)) {
            unset($cart[array_search($request->id, $cart)]);

            Session::put('cart', $cart);
            return response()->json('Удаленно из корзины!');
        }
        $arrayIds = collect($cart);
        $arrayIds->add($request->id);

        Session::put('cart', $arrayIds->unique()->toArray());

        return true;
    }

    public function favoriteAdd(Request $request)
    {
        $favorites = Session::has('favorites') ? Session::get('favorites') : [];

        if (in_array($request->id, $favorites)) {
            unset($favorites[array_search($request->id, $favorites)]);

            Session::put('favorites', $favorites);
            return response()->json('Удаленно из избранных!');
        }

        $arrayIds = Arr::add($favorites,count($favorites),$request->id);


        Session::put('favorites', $arrayIds);

        return true;
    }

    public function favoriteRemove(Request $request)
    {
        $favorites = Session::get('favorites');
        unset($favorites[array_search($request->id, $favorites)]);
        Session::put('favorites', $favorites);

        return response()->json('Удаленно из избранных!');
    }
}
