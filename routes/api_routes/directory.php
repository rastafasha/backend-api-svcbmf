<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;

Route::get('directory', [DirectoryController::class, 'index'])->name('directory.index');
Route::get('directory/show/{id}', [DirectoryController::class, 'show'])->name('directory.show');

Route::get('/directory/search/', [DirectoryController::class, 'search'])
    ->name('directory.search');

Route::post('directory/store', [DirectoryController::class, 'store'])->name('directory.store');

Route::post('directory/update/{directory}', [DirectoryController::class, 'update'])->name('directory.update');
Route::delete('directory/destroy/{id}', [DirectoryController::class, 'destroy'])->name('directory.destroy');

Route::put('/directory/update/eligibility/{directory:id}', [DirectoryController::class, 'updateEligibility'])
    ->name('directory.updateEligibility');

