<?php

namespace App\Providers;

use App\Services\Eloquent\PaperIlmiahServiceImpl;
use App\Services\PaperIlmiahService;
use Illuminate\Support\ServiceProvider;

class PaperIlmiahProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaperIlmiahService::class, PaperIlmiahServiceImpl::class);
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
