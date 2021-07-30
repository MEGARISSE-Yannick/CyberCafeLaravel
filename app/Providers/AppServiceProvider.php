<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// pour pouvoir avoir la pagination en plus petit
use Illuminate\Pagination\Paginator;

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
        // avoir la pagination en plus petit
        Paginator::useBootstrap();
    }
}
