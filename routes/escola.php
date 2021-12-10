<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Escola;

Route::prefix('/Escola')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [Escola\HomeController::class, 'index'])->name('escola.home');

        Route::get('Pesquisar', [Escola\EscolaController::class, 'index'])->name('escola.pesquisar');
        Route::get('Editar/{id}', [Escola\EscolaController::class, 'edit'])->name('escola.editar');

        Route::post('Editar/{id}', [Escola\EscolaController::class, 'update'])->name('escola.editar2');
        Route::post('Cadastrar', [Escola\EscolaController::class, 'store'])->name('escola.inserir');
        Route::delete('/Deletar/{id}', [Escola\EscolaController::class, 'destroy'])->name('escola.deletar');
    });
});
