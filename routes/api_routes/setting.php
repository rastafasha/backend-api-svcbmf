<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingGController;

Route::resource('setting', SettingGController::class);
Route::post('setting/store', [SettingGController::class, 'store'])->name('gsetting.store');
Route::get('setting/show/{id}', [SettingGController::class, 'show'])->name('gsetting.show');
Route::post('setting/update/{id}', [SettingGController::class, 'update'])->name('gsetting.update');
Route::delete('setting/destroy/{id}', [SettingGController::class, 'destroy'])->name('gsetting.destroy');
