<?php

namespace App\Http\Controllers;

use App\Models\Regency;

class RegencyController extends Controller
{
    public function index()
    {
        $query_province_id = request('province_id');

        $regencies = Regency::where('province_id', $query_province_id)->get();

        return response()->json([
            'success' => true,
            'data' => $regencies
        ]);
    }
}
