<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

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
    /*public function build()
    {
        return $this->from('admin@hng.local')->view('mails.certificate')->with([
            'certificate' => $this->certificate,
        ]);
    }*/

    public function build()
    {
        $response = Http::withToken(env('PDF_API', 'B6Oz9M9xQ1gvemLC0ZPVhDAO91TuTtxOaZK1PWB2'))->withOptions([
            'verify' => false,
        ])->post('https://docamatic.com/api/v1/pdf', [
            'source' => URL::to('/certificates/v/' . $this->certificate->hngi_id),
            'format' => 'A4',
            'media' => 'screen',
            'landscape' => true
        ]);
        $nameofpdf = $this->certificate->hngi_id;
        if ($response->successful()) {
            $data = $response->json();
            return $this->from('admin@hng.local')->view('mails.certificate')->with([
                'certificate' => $this->certificate,
            ])->attachData($data['document'], $nameofpdf);
        } else {
            return $this->from('admin@hng.local')->view('mails.certificate')->with([
                'certificate' => $this->certificate,
            ]);
        }
    }
}
