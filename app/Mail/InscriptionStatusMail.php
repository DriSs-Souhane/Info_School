<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
class InscriptionStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inscription;
    public $status;

    public function __construct($inscription, $status)
    {
        $this->inscription = $inscription;
        $this->status = $status;
    }

    public function build()
    {
        return $this->view('emails.inscription_status')
                    ->subject('Your Inscription Status')
                    ->with([
                        'name' => $this->inscription->first_name,
                        'status' => $this->status,
                    ]);
    }
    public function envelope()
{
   return new Envelope(
       from: new Address('Info_School@support.ma', 'directeur'),
       subject: 'Test',
   );
}
}
