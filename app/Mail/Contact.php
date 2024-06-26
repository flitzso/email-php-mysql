<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class Contact extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $fromName;
    public $fromEmail;
    public $subject;
    public $message;

    public function __construct(public readonly array $data)
    {
        $this->fromName = $data['fromName'];
        $this->fromEmail = $data['fromEmail'];
        $this->subject = $data['subject'];
        $this->message = $data['message'];
    }

    public function enveloper(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['fromEmail'], $this->data['fromName']),
            subject: $this->data['subject']
        );
    }


    public function Content(): Content
    {
        return new Content(
            html: 'mails.contact',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
