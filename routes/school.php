<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School;

Route::prefix('/school')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [School\HomeController::class, 'index'])->name('school.home');
    });
});
