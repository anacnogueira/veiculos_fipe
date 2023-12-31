<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\VehicleController;

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

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/models/{brandId}', [ModelController::class, 'index']);
Route::get('/years/{brandId}/{modelId}', [YearController::class, 'index']);
Route::get('/vehicles/{brandId}/{modelId}/{yearCode}', [VehicleController::class, 'index']);
Route::post('/vehicles/export/xlsx', [VehicleController::class, 'exportXlsx']);
Route::post('/vehicles/export/pdf', [VehicleController::class, 'exportPdf']);

