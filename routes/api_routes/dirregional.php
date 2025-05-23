<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirRegionalController;

Route::get('dirregional', [DirRegionalController::class, 'index'])->name('dirregional.index');
Route::get('dirregional/show/{id}', [DirRegionalController::class, 'show'])->name('dirregional.show');

Route::post('dirregional/store', [DirRegionalController::class, 'store'])->name('dirregional.store');
Route::post('dirregional/update/{dirregional}', [DirRegionalController::class, 'update'])->name('dirregional.update');
Route::delete('dirregional/destroy/{id}', [DirRegionalController::class, 'destroy'])->name('dirregional.destroy');


