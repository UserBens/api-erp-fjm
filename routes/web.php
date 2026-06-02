<?php

use App\Http\Controllers\KelompokTenagaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SalaryMstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/pegawai', [PegawaiController::class, 'index']);
Route::get('/api/salary', [SalaryMstController::class, 'index']);
Route::get('/api/kelompok-tenaga', [KelompokTenagaController::class, 'index']);
