<?php

namespace App\Http\Controllers;

use App\Models\SalaryMst;
use Illuminate\Http\Request;

class SalaryMstController
{
    public function index(Request $request)
    {
        $perPage = (int) $request->query('per_page', 20);
        $perPage = $perPage > 0 && $perPage <= 100 ? $perPage : 20;

        return response()->json(
            SalaryMst::orderBy('nomor')
                ->paginate($perPage)
        );
    }
}
