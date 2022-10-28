<?php

namespace App\Providers;

use App\Models\Basket;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceMasterProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view::composer(['index', 'category'], function ($view) {
            $view->with('categories', Category::getAllCategories());
        });
        view::composer('index', function ($view) {
            $view->with('products', Product::getAllProducts());
        });
        view::composer('layouts.master', function ($view) {
            $view->with('baskets', Basket::getAllSessionCart());
        });
        view::composer('layouts.master', function ($view) {
            $view->with('total', Basket::getTotalSessionCart());
        });
    }
}
