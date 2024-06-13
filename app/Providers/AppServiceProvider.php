<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Unit;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\Category;

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
    public function boot()
    {
        $units = Unit::all();
        $products = Product::all();
        $product_types = ProductType::all();
        $categories = Category::all();

        View::share('units', $units);
        View::share('product_types', $product_types);
        View::share('products', $products);
        View::share('categories', $categories);
    }


}
