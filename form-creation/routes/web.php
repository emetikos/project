<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('forms/create/{formHash}',[FormController::class, 'create']);

Route::get('forms/show/{formHash}/{userHash}',[FormController::class, 'show']);

Route::get('forms/update/{formHash}/{userHash}',[FormController::class, 'update']);

Route::get('forms/store', [FormController::class, 'store']);

Route::get('forms/form-update', [FormController::class, 'storeUpdated']);
