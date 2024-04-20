<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanHorizontalController;

Route::get('banhorizontal', [BanHorizontalController::class, 'index'])->name('index');
Route::get('banhorizontal/show/{id}', [BanHorizontalController::class, 'show'])->name('show');
Route::get('banhorizontal/activos', [BanHorizontalController::class, 'activos'])->name('activos');


Route::post('banhorizontal/store', [BanHorizontalController::class, 'store'])->name('store');
Route::post('banhorizontal/update/{aliado}', [BanHorizontalController::class, 'update'])->name('update');
Route::delete('banhorizontal/destroy/{id}', [BanHorizontalController::class, 'destroy'])->name('destroy');

Route::put('/banhorizontal/update/status/{aliado:id}', [BanHorizontalController::class, 'updateEligibility'])
    ->name('banhorizontal.updateEligibility');

