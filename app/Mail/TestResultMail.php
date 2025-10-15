<?php

namespace App\Mail;

use App\Models\Attempt;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestResultMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $attempt;

    public function __construct(User $user, Attempt $attempt)
    {
        $this->user = $user;
        $this->attempt = $attempt;
    }

    public function build()
    {
        return $this->subject('Your Test Result')
                    ->view('emails.test-result')
                    ->with([
                        'user' => $this->user,
                        'attempt' => $this->attempt,
                    ]);
    }
}

