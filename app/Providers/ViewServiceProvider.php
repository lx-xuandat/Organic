<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('css', function () {
            return config('css');
        });

        $this->app->singleton('Store', function () {
            return \App\Models\Setup::first();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\View::share('css', app('css'));
        \Illuminate\Support\Facades\View::share('Store', app('Store'));
    }
}
