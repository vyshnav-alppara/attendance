<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/home', [AttendanceController::class, 'index'])->name('home');
    Route::post('/attendance/search', [AttendanceController::class, 'search'])->name('attendance.search');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
