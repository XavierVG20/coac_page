<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NuevaQuejaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
 
public $queja;

    public function __construct($queja)
    {
        $this->queja = $queja;
    }

    

    public function content(): Content
    {
        return new Content(
            view: 'emails.nueva-queja'
        );
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva Queja Mail',
        );
    }

    /**
     * Get the message content definition.
     */
   
    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
