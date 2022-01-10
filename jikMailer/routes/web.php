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

Route::get('/test', function () {
    return view('emails.testMail');
});

Route::get('/mail', function () {
    return view('emails.sendmail');
});





Route::get('/users', [MailController::class, 'users']);
Route::get('/applications', [MailController::class, 'userApplications']);


//Route::get('/mail', function() {
//
//    Mail::to('spirosvelos@gmail.com')->send(new SendMail());
//});
