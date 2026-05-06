<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AuthController;

/* ---------- LOGIN ---------- */
// Route::get('/', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('/', [AuthController::class, 'login'])->name('login.post');

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


/* ---------- REGISTER ---------- */
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

/* ---------- DASHBOARD ---------- */
Route::get('/dashboard', [NoteController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

/* ---------- NOTES ---------- */
Route::post('/notes', [NoteController::class, 'store']);
Route::delete('/notes/{note}', [NoteController::class, 'destroy']);

/* ---------- LOGOUT ---------- */
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
