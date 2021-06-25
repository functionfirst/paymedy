<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sidebar', function() {
            return [
                [
                    'icon' => 'icon.clock',
                    'name' => 'Case activity',
                    'route' => 'home',
                    'active' => true
                ],
                [
                    'icon' => 'icon.template',
                    'name' => 'Templates',
                    'route' => 'home',
                    'active' => false
                ],
                [
                    'icon' => 'icon.chart-pie',
                    'name' => 'Performance',
                    'route' => 'home',
                    'active' => false
                ],
                [
                    'icon' => 'icon.bell',
                    'name' => 'Notifications',
                    'route' => 'home',
                    'active' => false
                ]
            ];
        });
    }
}
