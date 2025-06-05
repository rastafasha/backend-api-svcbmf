<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanVerticalController;

Route::get('banvertical', [BanVerticalController::class, 'index'])->name('banvertical.index');
Route::get('banvertical/show/{id}', [BanVerticalController::class, 'show'])->name('banvertical.show');
Route::get('banvertical/activos', [BanVerticalController::class, 'activos'])->name('banvertical.activos');

Route::post('banvertical/store', [BanVerticalController::class, 'store'])->name('banvertical.store');
Route::post('banvertical/update/{aliado}', [BanVerticalController::class, 'update'])->name('banvertical.update');
Route::delete('banvertical/destroy/{id}', [BanVerticalController::class, 'destroy'])->name('banvertical.destroy');

Route::put('banvertical/update/status/{aliado:id}', [BanVerticalController::class, 'updateEligibility'])
    ->name('banvertical.updateEligibility');

