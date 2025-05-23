<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;

Route::get('timelines', [TimelineController::class, 'index'])->name('timelines.index');
Route::get('timelines/show/{id}', [TimelineController::class, 'show'])->name('timelines.show');

Route::post('timelines/store', [TimelineController::class, 'store'])->name('timelines.store');
Route::post('timelines/update/{slider}', [TimelineController::class, 'update'])->name('timelines.update');
Route::delete('timelines/destroy/{id}', [TimelineController::class, 'destroy'])->name('timelines.destroy');
