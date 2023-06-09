<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReplyContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $msg;
    public string $name;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($msg,$name,$subject)
    {
        $this->msg = $msg;
        $this->name = $name;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('admin.contact.emails.contact-email');
    }
}
