<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Escola;

Route::prefix('/Escola')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [Escola\HomeController::class, 'index'])->name('escola.home');

        Route::match(['get', 'delete'], '/Deletar/{id}', [Escola\EscolaController::class, 'destroy'])->name('escola.deletar');
    });
});
