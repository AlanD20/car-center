<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::post('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/', [ClientController::class, 'index'])->name('home');
require __DIR__ . '/languages/index.php';
require __DIR__ . '/config.php';


Route::name('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('admin/{name?}', [AdminController::class, 'index'])->name('dashboard')->where('name', 'home|dashboard');

        Route::prefix('admin')->group(function () {
            require __DIR__ . '/slides/index.php';
            require __DIR__ . '/about/index.php';
            require __DIR__ . '/services/index.php';
            require __DIR__ . '/teams/index.php';
            require __DIR__ . '/partners/index.php';
            require __DIR__ . '/profile/index.php';
        });
        Route::post('admin/logout', [AuthController::class, 'destroy'])->name('logout');
    });

Route::prefix('admin')
    ->middleware('guest')
    ->group(function () {
        Route::get('login', [AuthController::class, 'create'])->name('login');
        Route::post('login', [AuthController::class, 'store']);
    });
Route::fallback(function () {
    return abort(404);
});
