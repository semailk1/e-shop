<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {

    }

    public function edit(Category $category)
    {
        $categories = Category::query()->where('parent_id', '=', 0)->get();

        return view('category.edit', compact('category', 'categories'));
    }

    public function delete(Category $category)
    {

    }

    public function getCategoriesDontParent()
    {
        $categories = Category::query()->where('parent_id', '!=', 0)->get();

        return response()->json($categories);
    }

    public function tree()
    {
        return view('category.tree');
    }
}
