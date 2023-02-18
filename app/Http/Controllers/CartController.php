<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function wishlist()
    {
        if (Session::has('favorites')){
            $favorites = Session::get('favorites');

            return view('wishlist', compact('favorites'));
        }

    }

    public function favoriteAdd(Request $request)
    {
        $favorites = Session::get('favorites');
        if (in_array($request->id, $favorites)) {
            unset($favorites[array_search($request->id, $favorites)]);

            Session::put('favorites', $favorites);
            return response()->json('Удаленно из избранных!');
        }
        $arrayIds = collect($favorites);
        $arrayIds->add($request->id);

        Session::put('favorites', $arrayIds->unique()->toArray());

        return true;
    }
}
