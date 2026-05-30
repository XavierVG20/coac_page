<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitudNoProcesadaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function build()
    {
        return $this
            ->subject('Solicitud no procesada')
            ->view('emails.solicitud-no-procesada');
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitud No Procesada Mail',
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
       return [
        Attachment::fromPath(
            public_path('uploads/institucional/1778456487_logo-1.png')
        )->as('logo.png'),
    ];
    }
}
