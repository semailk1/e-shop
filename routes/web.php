<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('register',[AuthController::class ,'register'])->name('register.index');
Route::post('register/store',[AuthController::class ,'store'])->name('register.store');
Route::get('login',[AuthController::class ,'login'])->name('register.index');
Route::post('login/auth',[AuthController::class ,'auth'])->name('login.auth');

Route::get('/list', [ProductController::class, 'productList'])->name('product.list');
Route::get('/wishlist', [CartController::class, 'wishlist'])->name('cart.wishlist');
Route::get('/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/{param?}', [ProductController::class, 'index'])->name('product.index');


/* AJAX */
Route::post('/favorites/add', [CartController::class, 'favoriteAdd'])->name('favorite.add');
