<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'protect')->name('home');
Route::get('/', function () {
  return view('protect', [
    'name' => 'James',
    'navigation' => [
        [
            'name' => 'Discover',
            'active' => false,
            'route' => 'home',
            'icon' => 'icon.tag'
        ],
        [
            'name' => 'Grow',
            'active' => false,
            'route' => 'home',
            'icon' => 'icon.arrow-expanded'
        ],
        [
            'name' => 'Protect',
            'active' => true,
            'route' => 'home',
            'icon' => 'icon.shield-check'
        ]
    ],
    'sidebar' => [
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
    ]
  ]);
})->name('home');