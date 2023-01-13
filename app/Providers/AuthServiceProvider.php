<?php

namespace App\Providers;

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

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });
        Gate::define('isManager', function ($user) {
            return $user->role === 'manager';
        });
        Gate::define('isAdminOrManager', function ($user) {
            if ($user->role === 'admin'):
                return true;
            elseif ($user->role === 'manager'):
                return true;
            else:
                return false;
            endif;
        });
    }
}
