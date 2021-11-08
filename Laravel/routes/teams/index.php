<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::name('teams.')->group(function () {

    Route::get('/teams', [TeamController::class, 'index'])->name('index');

    Route::get('/teams/create', [TeamController::class, 'create'])->name('create');

    Route::post('/teams', [TeamController::class, 'store'])->name('store');

    Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('edit');

    Route::patch('/teams/{team}', [TeamController::class, 'update'])->name('update');

    Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('destroy');
});
