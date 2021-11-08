<?php

use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;



Route::prefix('config')
    ->middleware('auth.config')
    ->group(function () {

        Route::view('/', 'admin.config');

        Route::get('/migration', [ConfigController::class, 'migration'])->name('config.migration');
        Route::get('/migration/reset', [ConfigController::class, 'migrationReset'])->name('config.migrationReset');
        Route::get('/link', [ConfigController::class, 'storageLink'])->name('config.link');
        Route::get('/userSeed', [ConfigController::class, 'UserSeed'])->name('config.userSeed');
        Route::get('/dataSeed', [ConfigController::class, 'DataSeed'])->name('config.dataSeed');
        Route::get('/key', [ConfigController::class, 'generateKey'])->name('config.key');
        Route::get('/cache', [ConfigController::class, 'clearCache'])->name('config.cache');
        Route::get('/cacheFiles', [ConfigController::class, 'makeCache'])->name('config.cacheFiles');
        Route::get('/clearPwdResetTokens', [ConfigController::class, 'clearPwdResetTokens'])->name('config.pwdResetTokens');
        Route::get('/appUp', [ConfigController::class, 'appUp'])->name('config.up');
        Route::get('/appDown', [ConfigController::class, 'appDown'])->name('config.down');
    });
