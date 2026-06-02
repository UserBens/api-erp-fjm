<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

class PegawaiController
{
    public function index()
    {
        return response()->json(
            Pegawai::get()
            // Pegawai::limit(5)->get()
        );
    }
}
