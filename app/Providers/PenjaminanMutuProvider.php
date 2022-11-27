<?php

namespace App\Providers;

use App\Services\Eloquent\PenjaminanMutuServiceImpl;
use App\Services\PenjaminanMutuService;
use Illuminate\Support\ServiceProvider;

class PenjaminanMutuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PenjaminanMutuService::class, PenjaminanMutuServiceImpl::class);
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
