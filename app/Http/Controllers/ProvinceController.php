<?php

namespace App\Http\Controllers;

use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $query_search = request('search');

        $provinces = Province::where('name', 'like', '%' . $query_search . '%')
            ->orderBy('name', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $provinces
        ]);
    }
}
