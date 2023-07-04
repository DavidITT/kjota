<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $msg;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $subject)
    {
        $this->msg = $msg;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('admin.contact.emails.contact-email');
    }
}
