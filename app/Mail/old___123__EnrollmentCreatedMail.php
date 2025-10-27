<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnrollmentCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailAddress;
    public $password;
    public $link;
    public $enrollment;

    public function __construct($emailAddress, $password, $link, $enrollment = null)
    {
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->link = $link;
        $this->enrollment = $enrollment;
    }

    public function build()
    {
        return $this->subject('Your TM Math Academy Account')
            ->view('emails.enrollment'); // Blade view below
    }
}
