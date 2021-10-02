<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School;

Route::prefix('/school')->group(function () {
    Route::get('/', [School\HomeController::class, 'index'])->name('school.home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
