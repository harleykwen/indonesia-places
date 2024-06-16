<?php

namespace App\Http\Controllers;

use App\Models\District;

class DistrictController extends Controller
{
    public function index()
    {
        $query_regency_id = request('regency_id');
        $query_search = request('search');

        $regencies = District::where('regency_id', $query_regency_id)
            ->where('name', 'like', '%' . $query_search . '%')
            ->orderBy('name', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $regencies
        ]);
    }
}
