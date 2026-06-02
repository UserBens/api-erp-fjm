<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

class PegawaiController
{
    public function index()
    {
        return response()->json(
            Pegawai::limit(10)->get()
        );
    }
}
