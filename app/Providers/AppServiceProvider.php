<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Service;
use App\Models\Setting;
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
        
        $services = Service::where('is_active', 1)->get();
        $setting =Setting::first();
        $branches = Branch::all();

        view()->share([
            'services' => $services,
            'branches' => $branches,
            'setting' => $setting,

        ]);
    }
}
