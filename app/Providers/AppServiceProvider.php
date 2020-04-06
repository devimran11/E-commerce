<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Composer;
use Illuminate\Support\ServiceProvider;
//use Illuminate\View\View;
use View;
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
        View::composer('front.includes.header', function($view){
            $view->with('publishedCategories', Category::where('publication_status', 1)->get() );
        });
        //View::share('name', 'Imran Hossain');
    }
}
