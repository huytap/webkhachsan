<?php

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
Route::get('tutorials', [\App\Http\Controllers\Api\ToturialController::class, 'index']);
Route::get('tutorials/{id}', [\App\Http\Controllers\Api\ToturialController::class, 'show']);
Route::post('tutorial', [\App\Http\Controllers\Api\ToturialController::class, 'store']);
Route::delete('tutorial/{id}', [\App\Http\Controllers\Api\ToturialController::class, 'destroy']);