<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Setting;

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
        
        $services = Service::where('is_active', 1)->get();
        $setting =Setting::first();

        view()->share([
            'services' => $services,
            'setting' => $setting,

        ]);
    }
}
