<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;

class PasswordSendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data;
    public $fotp;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $otp = rand(1, 999999);
        Session::put('fotp', $otp);
        $this->fotp = $otp;
        Session::put('femail', $data);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your OTP from LappyValley',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.password-send',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
