<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliacionesController;

Route::get('afiliaciones', [AfiliacionesController::class, 'index'])->name('afiliaciones.index');
Route::get('afiliaciones/show/{id}', [AfiliacionesController::class, 'show'])->name('afiliaciones.show');

Route::post('afiliaciones/store', [AfiliacionesController::class, 'store'])->name('afiliaciones.store');
Route::post('afiliaciones/update/{afiliacion}', [AfiliacionesController::class, 'update'])->name('afiliaciones.update');
Route::delete('afiliaciones/destroy/{id}', [AfiliacionesController::class, 'destroy'])->name('afiliaciones.destroy');

Route::put('afiliaciones/update/eligibility/{afiliacion:id}', [AfiliacionesController::class, 'updateEligibility'])
    ->name('afiliaciones.updateEligibility');

