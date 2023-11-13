<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('email.contactMail')
            ->with('data', $this->data)
            ->subject('Nouvelle notification')
            ->from($address = 'devis@kevin-gassam.com', $name = 'SITE WEB NOTIFICATION')
            ->to($this->data['desti']);
    }
}
