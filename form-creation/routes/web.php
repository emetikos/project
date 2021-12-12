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

//Route::get('/form', function () {
//    return view('pages.form');
//});


Route::get('form-generic/{form_id}',[FormController::class, 'generic']);
Route::get('show-form/{hash}',[FormController::class, 'show_form']);

Route::get('/form-display', [FormController::class, 'getForm']);
Route::get('/form-data', [FormController::class, 'getData']);
