<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevistaController;

Route::get('revistas', [RevistaController::class, 'index'])->name('revistas.index');
Route::get('revistas/show/{id}', [RevistaController::class, 'show'])->name('revistas.show');

Route::post('revistas/store', [RevistaController::class, 'store'])->name('revistasstore');
Route::post('revistas/update/{revista}', [RevistaController::class, 'update'])->name('revistas.update');
Route::delete('revistas/destroy/{id}', [RevistaController::class, 'destroy'])->name('revistas.destroy');
