<?php

namespace App\Http\Controllers;

use App\Models\District;

class DistrictController extends Controller
{
    public function index()
    {
        $query_regency_id = request('regency_id');

        $regencies = District::where('regency_id', $query_regency_id)->get();

        return response()->json([
            'success' => true,
            'data' => $regencies
        ]);
    }
}
