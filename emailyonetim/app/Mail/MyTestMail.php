<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $musteriler;
    public $metin;
    public $baslik;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($musteriler,$metin,$baslik)
    {
        $this-> musteriler = $musteriler;
        $this-> metin = $metin;
        $this-> baslik = $baslik;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("gedik.edu.tr'den mail")
                    ->view('emails.myTestMail')
                    ->with('metin', $this->metin)
                    ->with('baslik', $this->baslik);

    }
    
}
