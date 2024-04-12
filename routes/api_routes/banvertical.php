<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanVerticalController;

Route::get('banvertical', [BanVerticalController::class, 'index'])->name('index');
Route::get('banvertical/show/{id}', [BanVerticalController::class, 'show'])->name('show');

Route::post('banvertical/store', [BanVerticalController::class, 'store'])->name('store');
Route::post('banvertical/update/{aliado}', [BanVerticalController::class, 'update'])->name('update');
Route::delete('banvertical/destroy/{id}', [BanVerticalController::class, 'destroy'])->name('destroy');

Route::put('/banvertical/update/status/{aliado:id}', [BanVerticalController::class, 'updateEligibility'])
    ->name('banvertical.updateEligibility');

