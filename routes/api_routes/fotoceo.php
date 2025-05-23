<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotocCeoController;

Route::get('fotoceo', [FotocCeoController::class, 'index'])->name('fotoceo.index');
Route::get('fotoceo/show/{id}', [FotocCeoController::class, 'show'])->name('fotoceo.show');

Route::post('fotoceo/store', [FotocCeoController::class, 'store'])->name('fotoceo.store');
Route::post('fotoceo/update/{fotoceo}', [FotocCeoController::class, 'update'])->name('fotoceo.update');
Route::delete('fotoceo/destroy/{id}', [FotocCeoController::class, 'destroy'])->name('fotoceo.destroy');


