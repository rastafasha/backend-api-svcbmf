<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;

Route::get('galeria', [GaleriaController::class, 'index'])->name('galeria.index');
Route::get('galeria/show/{id}', [GaleriaController::class, 'show'])->name('galeria.show');

Route::post('galeria/store', [GaleriaController::class, 'store'])->name('galeria.store');
Route::post('galeria/update/{galeria}', [GaleriaController::class, 'update'])->name('galeria.update');
Route::delete('galeria/destroy/{id}', [GaleriaController::class, 'destroy'])->name('galeria.destroy');


