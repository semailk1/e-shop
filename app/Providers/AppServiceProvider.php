<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categoriesParents = Category::query()->with('childrens')
            ->where('parent_id', '=', 0)
            ->get();

        $brands = Brand::query()->get();

        View::composer('*', function ($view) use ($categoriesParents, $brands) {

            $view->with('categories', $categoriesParents);
            $view->with('brands', $brands);
        });
    }
}
