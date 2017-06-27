<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotMakingMoneyYet extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $request)
    {
        //
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->request['email'];
        $name = $this->request['name'];

        return $this->from($email, $name)
                    ->subject('Welcome to Crypto2Cedis')
                    ->markdown('emails.users.inactive');
    }
}
