<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('school.home');
    }
}
