<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AliadosController;

Route::get('aliados', [AliadosController::class, 'index'])->name('index');
Route::get('aliados/show/{id}', [AliadosController::class, 'show'])->name('show');

Route::post('aliados/store', [AliadosController::class, 'store'])->name('store');
Route::post('aliados/update/{aliado}', [AliadosController::class, 'update'])->name('update');
Route::delete('aliados/destroy/{id}', [AliadosController::class, 'destroy'])->name('destroy');

Route::put('/aliados/update/status/{aliado:id}', [AliadosController::class, 'updateEligibility'])
    ->name('aliados.updateEligibility');

