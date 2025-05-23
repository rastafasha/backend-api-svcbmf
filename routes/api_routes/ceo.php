<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CeoController;

Route::get('ceo', [CeoController::class, 'index'])->name('ceo.index');
Route::get('ceo/show/{id}', [CeoController::class, 'show'])->name('ceo.show');
Route::post('ceo/store', [CeoController::class, 'store'])->name('ceo.store');
Route::post('ceo/update/{ceo}', [CeoController::class, 'update'])->name('ceo.update');
Route::delete('ceo/destroy/{id}', [CeoController::class, 'destroy'])->name('ceo.destroy');


