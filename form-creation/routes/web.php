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

Route::get('forms/show/{formHash}',[FormController::class, 'show']);

Route::get('forms/update/{formHash}',[FormController::class, 'update']);

Route::get('/form-display', [FormController::class, 'store']);

//Route::get('/form-data', [FormController::class, 'getData']);
