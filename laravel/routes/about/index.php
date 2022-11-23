<?php

use App\Http\Controllers\AboutSectionController;
use Illuminate\Support\Facades\Route;


Route::name('about.')->group(function () {

    Route::get('/about', [AboutSectionController::class, 'index'])->name('index');

    Route::patch('/about', [AboutSectionController::class, 'update'])->name('update');
});
