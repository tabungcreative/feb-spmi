<?php

namespace App\Providers;

use App\Services\Eloquent\PenelitianServiceImpl;
use App\Services\PenelitianService;
use Illuminate\Support\ServiceProvider;

class PenelitianProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PenelitianService::class, PenelitianServiceImpl::class);
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
