<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware(['guest'])->group( function () {
    Route::get('login', [UserController::class, 'loginPage'])->name('login');
    Route::post('login', [UserController::class, 'login'])->name('loginUser');

    Route::get('register', [UserController::class, 'registerPage'])->name('register');
    Route::post('register', [UserController::class, 'register'])->name('registerUser');
});

Route::middleware('auth')->group(function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('', [UserController::class, 'dashboard'])->name('dashboard');
    });
});