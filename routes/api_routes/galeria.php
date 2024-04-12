<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;

Route::get('galeria', [GaleriaController::class, 'index'])->name('index');
Route::get('galeria/show/{id}', [GaleriaController::class, 'show'])->name('show');

Route::post('galeria/store', [GaleriaController::class, 'store'])->name('store');
Route::post('galeria/update/{galeria}', [GaleriaController::class, 'update'])->name('update');
Route::delete('galeria/destroy/{id}', [GaleriaController::class, 'destroy'])->name('destroy');


