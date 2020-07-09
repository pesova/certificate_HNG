<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificateCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $certificate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($certificate)
    {
        $this->certificate = $certificate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@hng.local')->view('mails.certificate')->with([
            'certificate' => $this->certificate,
        ]);
    }
}
