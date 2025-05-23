<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('blog', [BlogController::class, 'index'])->name('index');
Route::get('blog/show/{id}', [BlogController::class, 'show'])->name('show');
Route::get('blog/activos', [BlogController::class, 'activos'])->name('activos');
Route::get('blog/recientes', [BlogController::class, 'recientes'])->name('recientes');
Route::get('blog/destacados', [BlogController::class, 'destacados'])->name('destacados');

Route::get('/blog/showcategory/{blog}', [BlogController::class, 'postShowWithCategory'])
    ->name('blog.postShowWithCategory');

Route::get('/blog/slug/{slug}', [BlogController::class, 'postShowSlug'])
    ->name('blog.postShowSlug');


Route::post('blog/store', [BlogController::class, 'store'])->name('store');
Route::post('blog/update/{blog}', [BlogController::class, 'update'])->name('update');
Route::delete('blog/destroy/{id}', [BlogController::class, 'destroy'])->name('destroy');

Route::put('/blog/update/status/{blog:id}', [BlogController::class, 'updateEligibility'])
    ->name('blog.updateEligibility');

Route::get('/post/search/', [BlogController::class, 'search'])
    ->name('post.search');

