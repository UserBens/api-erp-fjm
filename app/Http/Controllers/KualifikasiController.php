<?php

namespace App\Http\Controllers;

use App\Models\Kualifikasi;
use Illuminate\Http\Request;

class KualifikasiController extends Controller
{
    public function indexKualifikasi(){
         return response()->json(
            Kualifikasi::get()
        );
    }
}
