<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotocCeoController;

Route::get('fotoceo', [FotocCeoController::class, 'index'])->name('index');
Route::get('fotoceo/show/{id}', [FotocCeoController::class, 'show'])->name('show');

Route::post('fotoceo/store', [FotocCeoController::class, 'store'])->name('store');
Route::post('fotoceo/update/{fotoceo}', [FotocCeoController::class, 'update'])->name('update');
Route::delete('fotoceo/destroy/{id}', [FotocCeoController::class, 'destroy'])->name('destroy');


