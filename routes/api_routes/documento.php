<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;

Route::get('documento', [DocumentoController::class, 'index'])->name('index');
Route::get('documento/show/{id}', [DocumentoController::class, 'show'])->name('show');

Route::post('documento/store', [DocumentoController::class, 'store'])->name('store');
Route::post('documento/update/{documento}', [DocumentoController::class, 'update'])->name('update');
Route::delete('documento/destroy/{id}', [DocumentoController::class, 'destroy'])->name('destroy');


