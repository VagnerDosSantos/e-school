<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AxiosController;

Route::prefix('axios')->group(function () {
    Route::get('/paises', [AxiosController::class, 'paises']);
    Route::get('/estados', [AxiosController::class, 'estados']);
    Route::get('/cidades/{id}', [AxiosController::class, 'cidades']);
    Route::get('/distritos/{id}', [AxiosController::class, 'distritos']);
});
