<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RetakeTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $password;
    public $link;
    public $enrollment;

    /**
     * Create a new message instance.
     */
    public function __construct($password, $link, $enrollment)
    {
        $this->password = $password;
        $this->link = $link;
        $this->enrollment = $enrollment;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Retake Your Test Access Link')
                    ->view('emails.retake-test');
    }
}
