<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
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


    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $rules = [
            'first_name' => 'min:2|max:50|required|string',
            'last_name' => 'min:2|max:50|required|string',
            'phone' => 'min:7|max:12|required|string',
            'password' => 'min:6|max:50|required',
            'email' => 'unique:users|min:4|max:150'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $newUser = new User();
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->last_name = $request->last_name;
        $newUser->first_name = $request->first_name;
        $newUser->phone = $request->phone;
        $newUser->save();
    }
}
