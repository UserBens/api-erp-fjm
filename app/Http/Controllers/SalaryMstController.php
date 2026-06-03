<?php

namespace App\Http\Controllers;

use App\Models\SalaryMst;
use Illuminate\Http\Request;

class SalaryMstController
{
    public function index(Request $request, ?string $periode = null)
    {
        $query = SalaryMst::orderByDesc('tgl_update');

        if ($periode) {
            $query->where('periode', $periode);
        }

        return response()->json(
            $query->get()
        );
    }
}
