<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirRegionalController;

Route::get('dirregional', [DirRegionalController::class, 'index'])->name('index');
Route::get('dirregional/show/{id}', [DirRegionalController::class, 'show'])->name('show');

Route::post('dirregional/store', [DirRegionalController::class, 'store'])->name('store');
Route::post('dirregional/update/{dirregional}', [DirRegionalController::class, 'update'])->name('update');
Route::delete('dirregional/destroy/{id}', [DirRegionalController::class, 'destroy'])->name('destroy');


