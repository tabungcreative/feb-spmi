<?php

namespace App\Providers;

use App\Services\Eloquent\PengumumanServiceImpl;
use App\Services\PengumumanService;
use Illuminate\Support\ServiceProvider;

class PengumumanProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PengumumanService::class, PengumumanServiceImpl::class);
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
