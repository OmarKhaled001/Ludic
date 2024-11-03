<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;

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
        $services = Service::all();

        view()->share([
            'services', $services,

        ]);
    }
}
