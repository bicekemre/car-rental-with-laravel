<?php

namespace App\Providers;

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
        $files = glob(app_path('Helpers') . "/*.php");
        foreach ($files as $key => $file) {
            require_once $file;
        }
    }
}
