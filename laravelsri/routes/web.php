<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

Route::get('/cek-db', function () {
    return DB::connection()->getDatabaseName();
});
Route::get('/barang', [BarangController::class, 'index'])->name('barang')->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');})->name('password.request');