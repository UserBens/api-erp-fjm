<?php

namespace App\Http\Controllers;

use App\Models\SalaryMst;
use Illuminate\Http\Request;

class SalaryMstController
{
    public function index(Request $request, ?string $periode = null)
    {
        $perPage = (int) $request->query('per_page', 20);
        $perPage = $perPage > 0 && $perPage <= 100 ? $perPage : 20;

        $query = SalaryMst::orderBy('nomor');

        if ($periode) {
            $query->where('periode', $periode);
        }

        return response()->json(
            $query->paginate($perPage)
        );
    }
}
