<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Paduamun 2024 - Contact request';
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $imageUrl = asset('img/paduamun2.png');
        return $this->view('send')
        ->with([
            'imageUrl' => $imageUrl,
        ]);
    }
}

//prueb ese send es lo que va llegar al correo di si?