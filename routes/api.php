<?php

use App\Http\Controllers\KelompokTenagaController;
use App\Http\Controllers\KualifikasiController;
use App\Http\Controllers\LokasiKerjaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\SalaryMstController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['apikey'])->group(function () {
    Route::get('/user', [UserController::class, 'indexUser']); // BARU
    
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/unit-kerja', [UnitKerjaController::class, 'index']); // BARU
    Route::get('/pengawas', [PengawasController::class, 'indexPengawas']);           // BARU
    Route::get('/pengawas-pekerjaan', [PengawasController::class, 'indexPengawasPekerjaan']); // BARU
    Route::get('/lokasi-kerja', [LokasiKerjaController::class, 'indexLokasiKerja']); // BARU
    Route::get('/lokasi-kerja-subkon', [LokasiKerjaController::class, 'indexLokasiKerjaSubkon']); // BARU
    Route::get('/kualifikasi', [KualifikasiController::class, 'indexKualifikasi']); // BARU


    Route::get('/salary-mst/{periode?}', [SalaryMstController::class, 'index']);

    Route::get('/kelompok-tenaga', [KelompokTenagaController::class, 'index']);
});
