<?php

namespace App\Http\Controllers;

use App\Models\Village;

class VillageController extends Controller
{
    public function index()
    {
        $query_district_id = request('district_id');

        $regencies = Village::where('district_id', $query_district_id)->get();

        return response()->json([
            'success' => true,
            'data' => $regencies
        ]);
    }
}
