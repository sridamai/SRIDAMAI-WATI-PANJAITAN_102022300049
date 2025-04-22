<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/cek-db', function () {
    return DB::connection()->getDatabaseName();
});
Route::get('/barang', [BarangController::class, 'index']);