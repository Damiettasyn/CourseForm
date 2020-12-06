<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMessage extends Mailable
{
    use Queueable, SerializesModels;

        public $name;
        public $phone;
        public $email;
        public $subject;
        public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone,$email,$subject,$body )
    {

        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->subject=$subject;
        $this->body = $body;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send-message')->from('aya@gmail.com');
    }
}
