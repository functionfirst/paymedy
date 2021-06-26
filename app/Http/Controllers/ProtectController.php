<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProtectController extends Controller
{
    protected $sidebar = [
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

    public function show()
    {
        return view('protect', [
            'navigation' => app('navigation'),
            'sidebar' => $this->sidebar,
        ]);
    }
}
