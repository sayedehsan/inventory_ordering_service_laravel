<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

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
        $this->registerPolicies();
        // if(!$this->app->routesAreCached()){
        //     Passport::routes();
        // }
        Passport::tokensExpireIn(now()->addDays(10));
        Passport::refreshTokensExpireIn(now()->addDays(30));
    }   
}
