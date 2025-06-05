<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanHorizontalController;

Route::get('banhorizontal', [BanHorizontalController::class, 'index'])->name('banhorizontal.index');
Route::get('banhorizontal/show/{id}', [BanHorizontalController::class, 'show'])->name('banhorizontal.show');
Route::get('banhorizontal/activos', [BanHorizontalController::class, 'activos'])->name('banhorizontal.activos');


Route::post('banhorizontal/store', [BanHorizontalController::class, 'store'])->name('banhorizontal.store');
Route::post('banhorizontal/update/{aliado}', [BanHorizontalController::class, 'update'])->name('banhorizontal.update');
Route::delete('banhorizontal/destroy/{id}', [BanHorizontalController::class, 'destroy'])->name('banhorizontal.destroy');

Route::put('banhorizontal/update/status/{aliado:id}', [BanHorizontalController::class, 'updateEligibility'])
    ->name('banhorizontal.updateEligibility');

