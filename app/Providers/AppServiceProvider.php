<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('super_admin', function (User $user) {
            return $user->role == 'super_admin';
        });

        Gate::define('admin', function (User $user) {
            return $user->role == 'admin';
        });
        Gate::define('user', function (User $user) {
            return $user->role == 'user';
        });

        Paginator::useBootstrap();
    }
}
