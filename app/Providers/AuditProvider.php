<?php

namespace App\Providers;

use App\Services\AuditService;
use App\Services\Eloquent\AuditServiceImpl;
use Illuminate\Support\ServiceProvider;

class AuditProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuditService::class, AuditServiceImpl::class);
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
