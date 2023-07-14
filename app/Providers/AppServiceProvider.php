<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Share categories in all views
        $categories = Category::with('subcategories')
            ->where('status','=',1)
            ->where('parent_id', '=', null)
            ->get();
        View::share('categories', $categories);
    }
}
