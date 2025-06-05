<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualizacionController;

//directorio
Route::get('actualizacion', [ActualizacionController::class, 'index'])
    ->name('actualizacion.index');

Route::post('actualizacion/store', [ActualizacionController::class, 'store'])
    ->name('actualizacion.store');

Route::get('actualizacion/search/', [ActualizacionController::class, 'search'])
    ->name('actualizacion.search');

Route::get('actualizacion/show/{actualizacion}', [ActualizacionController::class, 'show'])
    ->name('actualizacion.show');
