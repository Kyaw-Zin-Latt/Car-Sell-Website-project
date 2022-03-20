<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        View::share("allBlogs",Blog::latest('id')->get());
        View::share("blogPag",Blog::latest('id')->paginate(2));
        View::share("blogLimited",Blog::latest('id')->limit(2)->get());
        View::share("blogLimitedThree",Blog::latest('id')->limit(3)->get());
    }
}
