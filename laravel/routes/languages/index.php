<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;


Route::name('languages.')->group(function () {
    Route::get('en', [LocaleController::class, 'english'])->name('english');
    Route::get('ku', [LocaleController::class, 'kurdish'])->name('kurdish');
    Route::get('ar', [LocaleController::class, 'arabic'])->name('arabic');
});
