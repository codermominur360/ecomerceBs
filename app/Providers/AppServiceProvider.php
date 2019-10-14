<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use  View;

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
//        View::share('name','this is used for viewpages');
        Schema::defaultStringLength(191);
//        view::composer('*',function ($view)
//        {
//            $view->with('category_display',Category::where('status','active') ->get());
//        });
    }
}
