<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class SendRecordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $total_bookings, $total_price, $total_fees, $bookingSummary, $from_date, $to_date;

    public function __construct($total_bookings, $total_price, $total_fees, $bookingSummary, $from_date = null, $to_date = null)
    {
        $this->total_bookings = $total_bookings;
        $this->total_price = $total_price;
        $this->total_fees = $total_fees;
        $this->bookingSummary = $bookingSummary;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Complete Booking Summary'
        );
    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.dashboard_record', // ✅ Blade file you will create
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
