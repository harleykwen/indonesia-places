<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VillageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/province', [ProvinceController::class, 'index']);
Route::get('/regency', [RegencyController::class, 'index']);
Route::get('/district', [DistrictController::class, 'index']);
Route::get('/village', [VillageController::class, 'index']);
