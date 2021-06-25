<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('navigation', function() {
            return [
                [
                    'name' => 'Discover',
                    'active' => false,
                    'route' => 'home',
                    'icon' => 'icon.tag',
                ],
                [
                    'name' => 'Grow',
                    'active' => false,
                    'route' => 'home',
                    'icon' => 'icon.arrow-expanded',
                ],
                [
                    'name' => 'Protect',
                    'active' => true,
                    'route' => 'home',
                    'icon' => 'icon.shield-check',
                ]
                ];
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     if (env('APP_ENV') === 'production') {
    //         URL::forceScheme('https');
    //     }
    // }
}
