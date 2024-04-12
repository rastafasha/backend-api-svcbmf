<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliacionesController;

Route::get('afiliaciones', [AfiliacionesController::class, 'index'])->name('index');
Route::get('afiliaciones/show/{id}', [AfiliacionesController::class, 'show'])->name('show');

Route::post('afiliaciones/store', [AfiliacionesController::class, 'store'])->name('store');
Route::post('afiliaciones/update/{afiliacion}', [AfiliacionesController::class, 'update'])->name('update');
Route::delete('afiliaciones/destroy/{id}', [AfiliacionesController::class, 'destroy'])->name('destroy');

Route::put('/afiliaciones/update/eligibility/{afiliacion:id}', [AfiliacionesController::class, 'updateEligibility'])
    ->name('afiliaciones.updateEligibility');

