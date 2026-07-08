<?php

namespace App\Http\Controllers;

use App\Models\PengawasIntraUser;
use App\Models\PengawasPekerjaan;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    public function indexPengawas()
    {
        return response()->json(PengawasIntraUser::get());
    }

    public function indexPengawasPekerjaan()
    {
        return response()->json(PengawasPekerjaan::get());
    }
}
