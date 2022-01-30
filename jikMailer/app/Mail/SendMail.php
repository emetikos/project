<?php

namespace App\Mail;

use App\Models\EmailUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('ben@jiksoftware.ltd.uk')
                    ->subject("New 'direct employer search' on JobsInKent.com - find your ideal job today...")
                    ->replyTo(['address' => 'bounce@jiksoftware.ltd.uk'])
                    ->view('emails.sendmail');


    }
}
