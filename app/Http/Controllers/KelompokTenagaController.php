<?php

namespace App\Http\Controllers;

use App\Models\KelompokTenaga;
use Illuminate\Http\Request;

class KelompokTenagaController
{
    public function index(Request $request)
    {
        $perPage = (int) $request->query('per_page', 20);
        $perPage = $perPage > 0 && $perPage <= 100 ? $perPage : 20;

        return response()->json(
            KelompokTenaga::orderBy('nama_kelompok_tenaga')
                ->paginate($perPage)
        );
    }
}
