<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('school.home', [
            'active' => 0,
            'transfer' => 0,
            'quitter' => 0,
            'deceased' => 0
        ]);
    }
}
