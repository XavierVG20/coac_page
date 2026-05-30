<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmacionQuejaMail extends Mailable
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

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmación de recepción'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.confirmacion-queja'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
       return [
        Attachment::fromPath(
            public_path('uploads/institucional/1778456487_logo-1.png')
        )->as('logo.png'),
    ];
    }
}
