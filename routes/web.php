<?php

use App\Http\Controllers\KelompokTenagaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SalaryMstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});