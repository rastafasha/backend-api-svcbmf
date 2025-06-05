<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('areapaciente', [PacienteController::class, 'index'])->name('areapaciente.index');
Route::get('areapaciente/show/{id}', [PacienteController::class, 'show'])->name('areapaciente.show');
Route::get('areapaciente/recientes', [PacienteController::class, 'recientes'])->name('areapaciente.recientes');
Route::get('areapaciente/destacados', [PacienteController::class, 'destacados'])->name('areapaciente.destacados');
Route::get('areapaciente/slug/{slug}', [PacienteController::class, 'pacienteShowSlug'])
    ->name('areapaciente.pacienteShowSlug');
    
Route::post('areapaciente/store', [PacienteController::class, 'store'])->name('areapaciente.store');
Route::post('areapaciente/update/{areapaciente}', [PacienteController::class, 'update'])->name('areapaciente.update');
Route::delete('areapaciente/destroy/{id}', [PacienteController::class, 'destroy'])->name('areapaciente.destroy');