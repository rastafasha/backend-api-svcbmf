<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanCuadriadoController;

Route::get('bancuadrados', [BanCuadriadoController::class, 'index'])->name('bancuadrados.index');
Route::get('bancuadrados/show/{id}', [BanCuadriadoController::class, 'show'])->name('bancuadrados.show');
Route::get('bancuadrados/activos', [BanCuadriadoController::class, 'activos'])->name('bancuadrados.activos');

Route::post('bancuadrados/store', [BanCuadriadoController::class, 'store'])->name('bancuadrados.store');
Route::post('bancuadrados/update/{aliado}', [BanCuadriadoController::class, 'update'])->name('bancuadrados.update');
Route::delete('bancuadrados/destroy/{id}', [BanCuadriadoController::class, 'destroy'])->name('bancuadrados.destroy');

Route::put('bancuadrados/update/status/{aliado:id}', [BanCuadriadoController::class, 'updateEligibility'])
    ->name('bancuadrados.updateEligibility');

