<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('areapaciente', [PacienteController::class, 'index'])->name('index');
Route::get('areapaciente/show/{id}', [PacienteController::class, 'show'])->name('show');
Route::get('areapaciente/recientes', [PacienteController::class, 'recientes'])->name('recientes');
Route::get('areapaciente/destacados', [PacienteController::class, 'destacados'])->name('destacados');

Route::post('areapaciente/store', [PacienteController::class, 'store'])->name('store');
Route::post('areapaciente/update/{areapaciente}', [PacienteController::class, 'update'])->name('update');
Route::delete('areapaciente/destroy/{id}', [PacienteController::class, 'destroy'])->name('destroy');