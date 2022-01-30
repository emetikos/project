<?php

use App\Http\Controllers\CoreController;
use App\Http\Controllers\MailController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

## WELCOME PAGE ##
Route::get('/', [CoreController::class, 'index']);

## SHOW  USERS ##
Route::get('/users', [MailController::class, 'users']);

## SEND EMAIL TO USERS ##
Route::get('/mail', [MailController::class, 'sendMail']);
