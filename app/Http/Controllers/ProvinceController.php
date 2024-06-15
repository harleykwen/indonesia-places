<?php

namespace App\Http\Controllers;

use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::all();

        return response()->json([
            'success' => true,
            'data' => $provinces
        ]);
    }
}
