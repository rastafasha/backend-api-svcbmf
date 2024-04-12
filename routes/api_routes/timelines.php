<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

Route::get('timelines', [TimelineController::class, 'index'])->name('index');
Route::get('timelines/show/{id}', [TimelineController::class, 'show'])->name('show');

Route::post('timelines/store', [TimelineController::class, 'store'])->name('store');
Route::post('timelines/update/{slider}', [TimelineController::class, 'update'])->name('update');
Route::delete('timelines/destroy/{id}', [TimelineController::class, 'destroy'])->name('destroy');
