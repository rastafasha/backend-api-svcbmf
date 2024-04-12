<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;

Route::get('directory', [DirectoryController::class, 'index'])->name('index');
Route::get('directory/show/{id}', [DirectoryController::class, 'show'])->name('show');

Route::post('directory/store', [DirectoryController::class, 'store'])->name('store');
Route::post('directory/update/{directory}', [DirectoryController::class, 'update'])->name('update');
Route::delete('directory/destroy/{id}', [DirectoryController::class, 'destroy'])->name('destroy');

Route::put('/directory/update/eligibility/{directory:id}', [DirectoryController::class, 'updateEligibility'])
    ->name('directory.updateEligibility');

