<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;


Route::name('partners.')->group(function () {
    Route::get('/partners', [PartnerController::class, 'index'])->name('index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('create');

    Route::post('/partners', [PartnerController::class, 'store'])->name('store');

    Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('edit');

    Route::patch('/partners/{partner}', [PartnerController::class, 'update'])->name('update');

    Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('destroy');
});
