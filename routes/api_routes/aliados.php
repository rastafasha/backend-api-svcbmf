<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AliadosController;

Route::get('aliados', [AliadosController::class, 'index'])->name('aliados.index');
Route::get('aliados/show/{id}', [AliadosController::class, 'show'])->name('aliados.show');

Route::post('aliados/store', [AliadosController::class, 'aliadosStore'])->name('aliados.aliadosStore');

Route::post('aliados/update/{aliado}', [AliadosController::class, 'update'])->name('aliados.update');
Route::delete('aliados/destroy/{id}', [AliadosController::class, 'destroy'])->name('aliados.destroy');

Route::put('aliados/update/status/{aliado:id}', [AliadosController::class, 'updateEligibility'])
    ->name('aliados.updateEligibility');

