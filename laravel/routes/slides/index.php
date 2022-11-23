<?php

use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;


Route::name('slides.')->group(function () {

    Route::get('/slides', [SlideController::class, 'index'])->name('index');

    Route::get('/slides/create', [SlideController::class, 'create'])->name('create');

    Route::post('/slides', [SlideController::class, 'store'])->name('store');

    Route::get('/slides/{slide}/edit', [SlideController::class, 'edit'])->name('edit');

    Route::patch('/slides/{slide}', [SlideController::class, 'update'])->name('update');

    Route::delete('/slides/{slide}', [SlideController::class, 'destroy'])->name('destroy');
});
