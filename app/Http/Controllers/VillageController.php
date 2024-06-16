<?php

namespace App\Http\Controllers;

use App\Models\Village;

class VillageController extends Controller
{
    public function index()
    {
        $query_district_id = request('district_id');
        $query_search = request('search');

        $regencies = Village::where('district_id', $query_district_id)
            ->where('name', 'like', '%' . $query_search . '%')
            ->orderBy('name', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $regencies
        ]);
    }
}
