<?php

namespace App\Providers;

use App\Services\Eloquent\FileDokumenServiceImpl;
use App\Services\FileDokumenService;
use Illuminate\Support\ServiceProvider;

class FileDokumenProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FileDokumenService::class, FileDokumenServiceImpl::class);
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
