<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnvoieMail extends Mailable
{
    use Queueable, SerializesModels;
public $details;
    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Get the message envelope.
     */
   public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Envoie Mail',
        );
    }
    public function build()
    {
         return $this->subject('Nouveau message de ' . $this->details['nom_prenom'])
                ->view('mail.email')
                ->with(['details' => $this->details]);
    }

}
