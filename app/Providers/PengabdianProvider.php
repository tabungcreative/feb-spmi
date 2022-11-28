<?php

namespace App\Providers;

use App\Services\Eloquent\PengabdianServiceImpl;
use App\Services\PengabdianService;
use Illuminate\Support\ServiceProvider;

class PengabdianProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PengabdianService::class, PengabdianServiceImpl::class);
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
