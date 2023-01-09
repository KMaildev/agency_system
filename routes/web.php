<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Route::group(['middleware' => 'NotLogin'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/post_login', [AuthController::class, 'postLogin'])->name('post_login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/post_register', [AuthController::class, 'postRegister'])->name('post_register');
});
