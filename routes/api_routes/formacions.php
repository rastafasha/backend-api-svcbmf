<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;

Route::get('formacions', [FormacionController::class, 'index'])->name('index');
Route::get('formacions/show/{id}', [FormacionController::class, 'show'])->name('show');

Route::post('formacions/store', [FormacionController::class, 'store'])->name('store');
Route::post('formacions/update/{formacion}', [FormacionController::class, 'update'])->name('update');
Route::delete('formacions/destroy/{id}', [FormacionController::class, 'destroy'])->name('destroy');


