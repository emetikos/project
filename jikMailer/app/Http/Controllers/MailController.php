<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\EmailUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {


    }

    public function users()
    {

        $users = EmailUser::where([
            'is_sent' => false,
            'has_unsubscribed' => false,
        ])->limit(500)
            ->get();

        foreach ($users as $user){
            echo '<pre>';
                print_r($user->email);
            echo '</pre>';
        }


    }


    public function sendMail()
    {

//        Mail::to('spirosvelos@gmail.com')->send(new SendMail());

        $time_start = microtime(true);
        $users = EmailUser::where([
            'is_sent' => false,
            'has_unsubscribed' => false,
        ])->limit(505)
            ->get();

        foreach ($users as $user){

            try{
                Mail::to($user->email)->send(new SendMail());

                $user->update([ 'is_sent' => true]);
            } catch (\Exception $e){
                $failed_emails[] = [
                    'email' => $user->email,
                    'error_message' => $e->getMessage(),
                ];
                dump('catching...' , $failed_emails);
            }
        }

        if (Mail::failures() > 0 ){
            foreach (Mail::failures() as $mail){
                dump('dumping fialures...',$mail);
            }
        }
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);
//        return view('emails.failed_emails',[
//            'users' => $users);

        dump('runtime: '.(($execution_time / 1000000).' seconds'));





//        foreach ($users as $user) {
//
//            Mail::to($user->user_email)->send(new SendMail());
//
//            if (count(Mail::failures()) > 0) {
//
//                $errors = 'Failed to send password reset email, please try again.';
//            } else {
//                $user->update([
//                    'is_sent' => true,
//                ]);
//            }
//        }


//
//        if (count(Mail::failures()) > 0) {
//            dd(Mail::failures());
//        }



    }
}
