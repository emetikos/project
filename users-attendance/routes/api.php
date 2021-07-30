<?php

use App\Http\Controllers\API\AttendanceController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/display', [AttendanceController::class, 'index']);
Route::get('/display/{id}', [AttendanceController::class, 'show']);
Route::post('/store', [AttendanceController::class, 'store']);
Route::put('/display/{id}', [AttendanceController::class, 'update']);
Route::delete('/delete/{id}', [AttendanceController::class, 'delete']);



