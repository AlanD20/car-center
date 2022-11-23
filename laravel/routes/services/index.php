<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::name('services.')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('create');

    Route::post('/services', [ServiceController::class, 'store'])->name('store');

    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('edit');

    Route::patch('/services/{service}', [ServiceController::class, 'update'])->name('update');

    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('destroy');
});
