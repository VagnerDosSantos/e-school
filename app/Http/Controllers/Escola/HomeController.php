<?php

namespace App\Http\Controllers\Escola;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('escola.home', [
            'ativos' => 0,
            'transferidos' => 0,
            'desistentes' => 0,
            'falecidos' => 0
        ]);
    }
}
