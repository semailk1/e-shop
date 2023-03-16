<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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

Route::get('admin',[AdminController::class ,'index'])->name('admin.index');
Route::get('admin/login',[AdminController::class ,'login'])->name('admin.login');
Route::get('admin/users',[AdminController::class ,'users'])->name('admin.users');

/* CATEGORY */
Route::get('admin/categories',[CategoryController::class ,'index'])->name('admin.categories');
Route::get('admin/categories/create',[CategoryController::class ,'create'])->name('admin.category.create');
Route::get('admin/categories/tree',[CategoryController::class ,'tree'])->name('admin.category.tree');
Route::get('admin/categories/edit/{category}',[CategoryController::class ,'edit'])->name('admin.category.edit');
Route::get('admin/categories/delete/{category}',[CategoryController::class ,'delete'])->name('admin.category.delete');
Route::get('admin/categories/dont-parent', [CategoryController::class, 'getCategoriesDontParent'])->name('admin.category.get.dont-parent');

/* BRAND */
Route::get('admin/brands',[BrandController::class ,'index'])->name('admin.brands');
Route::get('admin/brands/create',[BrandController::class ,'create'])->name('admin.brands.create');
Route::get('admin/brands/edit/{brand}',[BrandController::class ,'edit'])->name('admin.brand.edit');
Route::get('admin/brands/delete/{brand}',[BrandController::class ,'delete'])->name('admin.brand.delete');
Route::post('admin/brands/store',[BrandController::class ,'store'])->name('admin.brands.store');
Route::post('admin/brands/update/{brand}',[BrandController::class ,'update'])->name('admin.brands.update');

Route::get('admin/products',[AdminController::class ,'products'])->name('admin.products');
Route::get('admin/products/create',[AdminController::class ,'productCreate'])->name('admin.products.create');
Route::post('admin/products/store',[AdminController::class ,'productStore'])->name('admin.products.store');

Route::get('admin/products/edit/{product}',[AdminController::class ,'productEdit'])->name('admin.products.edit');
Route::post('admin/products/update/{product}',[AdminController::class ,'productUpdate'])->name('admin.products.update');
Route::post('admin/auth',[AdminController::class ,'auth'])->name('admin.auth');

Route::get('register',[AuthController::class ,'register'])->name('register.index');
Route::post('register/store',[AuthController::class ,'store'])->name('register.store');
Route::get('login',[AuthController::class ,'login'])->name('login.index');
Route::post('login/auth',[AuthController::class ,'auth'])->name('login.auth');

Route::get('/list', [ProductController::class, 'productList'])->name('product.list');
Route::get('/product-filter', [ProductController::class, 'filter'])->name('product.filter');
Route::get('/wishlist', [CartController::class, 'wishlist'])->name('cart.wishlist');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::get('/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/{param?}', [ProductController::class, 'index'])->name('product.index');


/* AJAX */
Route::post('/cart/add', [CartController::class, 'cartAdd'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::post('/favorites/add', [CartController::class, 'favoriteAdd'])->name('favorite.add');
Route::post('/favorites/remove', [CartController::class, 'favoriteRemove'])->name('favorite.remove');
