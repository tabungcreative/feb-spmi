<?php

namespace App\Providers;

use App\Services\DokumenMutuService;
use App\Services\Eloquent\DokumenMutuServiceImpl;
use Illuminate\Support\ServiceProvider;

class DokumenMutuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DokumenMutuService::class, DokumenMutuServiceImpl::class);
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
