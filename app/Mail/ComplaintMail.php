<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Mail\ComplaintMail;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ComplaintMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $text;
    /**
     * Create a new message instance.
     */
    public function __construct($_name, $_text)
    {
        $this->name = $_name;
        $this->text = $_text;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('bnb104@noreply.com', 'BNB 104'), //? Mittente
            subject: 'Grazie per il feedback', //? Oggetto Mail
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.ComplaintMail', //? Percorso vista da visualizzare come contenuto mail
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