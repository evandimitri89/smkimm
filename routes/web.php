<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/profiles', [ProfileController::class, 'showProfile'])->name('profile');
    Route::get('/profiles/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profiles', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/upload-picture', [ProfileController::class, 'uploadPicture'])
        ->name('profile.upload');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

