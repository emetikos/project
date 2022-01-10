<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {

    }

    public function users(){

            $users = DB::table('user')
                    ->where('role', 'ROLE_JOBSEEKER')
                    ->get();

            foreach ($users as $user){
                echo '<pre>';
                print_r($user->first_name);
                echo '</pre>';
            }

//        Mail::to('spirosvelos@gmail.com')->send(new SendMail());
    }

    public function userApplications() {

        $applications = DB::table('application')
                            ->whereNotNull('jobseeker_email')
                            ->get();

        foreach ($applications as $application){
            echo '<pre>';
            print_r($application->job_title.' '. $application->jobseeker_email);
            echo '</pre>';
        }
    }
}
