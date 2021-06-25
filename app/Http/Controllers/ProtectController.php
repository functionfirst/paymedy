<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProtectController extends Controller
{
    public function show()
    {
        return view('protect', [
            'navigation' => app('navigation'),
            'sidebar' => app('sidebar')
        ]);
    }
}
