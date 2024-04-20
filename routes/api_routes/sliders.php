<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

Route::get('sliders', [SliderController::class, 'index'])->name('index');
Route::get('sliders/activos', [SliderController::class, 'activos'])->name('activos');
Route::get('sliders/show/{id}', [SliderController::class, 'show'])->name('show');

Route::post('sliders/store', [SliderController::class, 'store'])->name('store');
Route::post('sliders/update/{slider}', [SliderController::class, 'update'])->name('update');
Route::delete('sliders/destroy/{id}', [SliderController::class, 'destroy'])->name('destroy');
