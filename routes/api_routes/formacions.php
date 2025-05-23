<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;

Route::get('formacions', [FormacionController::class, 'index'])->name('formacions.index');
Route::get('formacions/show/{id}', [FormacionController::class, 'show'])->name('formacions.show');

Route::post('formacions/store', [FormacionController::class, 'store'])->name('formacions.store');
Route::post('formacions/update/{formacion}', [FormacionController::class, 'update'])->name('formacions.update');
Route::delete('formacions/destroy/{id}', [FormacionController::class, 'destroy'])->name('formacions.destroy');


