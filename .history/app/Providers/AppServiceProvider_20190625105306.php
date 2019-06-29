<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Paginate\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::defultView('vendor.pagination.bootstrap-4');
        Paginator::defultSView('vendor.pagination.bootstrap-4');


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
