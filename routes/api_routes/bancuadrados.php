<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanCuadriadoController;

Route::get('bancuadrados', [BanCuadriadoController::class, 'index'])->name('index');
Route::get('bancuadrados/show/{id}', [BanCuadriadoController::class, 'show'])->name('show');
Route::get('bancuadrados/activos', [BanCuadriadoController::class, 'activos'])->name('activos');

Route::post('bancuadrados/store', [BanCuadriadoController::class, 'store'])->name('store');
Route::post('bancuadrados/update/{aliado}', [BanCuadriadoController::class, 'update'])->name('update');
Route::delete('bancuadrados/destroy/{id}', [BanCuadriadoController::class, 'destroy'])->name('destroy');

Route::put('/bancuadrados/update/status/{aliado:id}', [BanCuadriadoController::class, 'updateEligibility'])
    ->name('bancuadrados.updateEligibility');

