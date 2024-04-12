<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CeoController;

Route::get('ceo', [CeoController::class, 'index'])->name('index');
Route::get('ceo/show/{id}', [CeoController::class, 'show'])->name('show');
Route::post('ceo/store', [CeoController::class, 'store'])->name('store');
Route::post('ceo/update/{ceo}', [CeoController::class, 'update'])->name('update');
Route::delete('ceo/destroy/{id}', [CeoController::class, 'destroy'])->name('destroy');


