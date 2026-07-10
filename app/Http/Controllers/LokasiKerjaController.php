<?php

namespace App\Http\Controllers;

use App\Models\LokasiKerja;
use App\Models\LokasiKerjaSubkon;
use Illuminate\Http\Request;

class LokasiKerjaController extends Controller
{
    public function indexLokasiKerja()
    {
        $lokasiKerja = LokasiKerja::all();
        return response()->json($lokasiKerja);
    }

    public function indexLokasiKerjaSubkon()
    {
        $lokasiKerjaSubkon = LokasiKerjaSubkon::all();
        return response()->json($lokasiKerjaSubkon);
    }
}
