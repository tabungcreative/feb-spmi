<?php

namespace App\Providers;

use App\Helper\AuthUser;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        Gate::define('admin', function ($user = null) {
            $user = AuthUser::user();
            return
                in_array('admin-spmi', $user->roles) ||
                in_array('super-admin', $user->roles);
        });
    }
}
