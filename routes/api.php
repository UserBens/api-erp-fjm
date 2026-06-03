<?php

use App\Http\Controllers\KelompokTenagaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SalaryMstController;
use Illuminate\Support\Facades\Route;

Route::middleware(['apikey'])->group(function () {
    Route::get('/pegawai', [PegawaiController::class, 'index']);

    Route::get('/salary-mst/{periode?}', [SalaryMstController::class, 'index']);

    Route::get('/kelompok-tenaga', [KelompokTenagaController::class, 'index']);
});
