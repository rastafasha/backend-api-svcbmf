<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;

Route::get('cargo', [CargoController::class, 'index'])->name('cargo.index');
Route::get('cargo/show/{id}', [CargoController::class, 'show'])->name('cargo.show');


