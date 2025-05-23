<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;

Route::get('documento', [DocumentoController::class, 'index'])->name('documento.index');
Route::get('documento/show/{id}', [DocumentoController::class, 'show'])->name('documento.show');

Route::post('documento/store', [DocumentoController::class, 'store'])->name('documento.store');
Route::post('documento/update/{documento}', [DocumentoController::class, 'update'])->name('documento.update');
Route::delete('documento/destroy/{id}', [DocumentoController::class, 'destroy'])->name('documento.destroy');


