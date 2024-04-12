<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevistaController;

Route::get('revistas', [RevistaController::class, 'index'])->name('index');
Route::get('revistas/show/{id}', [RevistaController::class, 'show'])->name('show');

Route::post('revistas/store', [RevistaController::class, 'store'])->name('store');
Route::post('revistas/update/{revista}', [RevistaController::class, 'update'])->name('update');
Route::delete('revistas/destroy/{id}', [RevistaController::class, 'destroy'])->name('destroy');
