<?php

namespace App\Providers;

use App\Services\BeritaService;
use App\Services\Eloquent\BeritaServiceImpl;
use Illuminate\Support\ServiceProvider;

class BeritaProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BeritaService::class, BeritaServiceImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
