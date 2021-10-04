<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/cars/{manufacturer}', [CarController::class, 'showCarsByManufacturer']);
Route::get('/v1/cars/color/{color}', [CarController::class, 'showCarsByColor']);
Route::post('/v1/cars/{cars}', [CarController::class, 'showCarsByClass']);