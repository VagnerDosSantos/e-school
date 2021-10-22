<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Escola;

Route::prefix('/Escola')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [Escola\HomeController::class, 'index'])->name('escola.home');

        Route::get('/Inserir', [Escola\EscolaController::class, 'create'])->name('escola.create');


        Route::post('/Inserir', [Escola\EscolaController::class, 'store'])->name('escola.inserir');
        Route::delete('/Deletar/{id}', [Escola\EscolaController::class, 'destroy'])->name('escola.deletar');
    });
});
