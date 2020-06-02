<?php

namespace App\Providers;

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
<<<<<<< HEAD
        $this -> app -> bind('path.public', function() { return base_path('public_html'); });
=======
        //
>>>>>>> 53874d86f0ac1456337cd060c492c46d4f768771
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
