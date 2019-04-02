<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailToContactDakotel extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $prenom;
    public $adresseMail;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $prenom, $adresseMail, $message)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresseMail = $adresseMail;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->adresseMail)->markdown('standard.mailContactDakotel');
    }
}
