<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PermohonanEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $permohonan;
    public $ref;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($permohonan, $ref)
    {
      $this->permohonan = $permohonan;
      $this->ref = $ref;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Permohonan Aset Sewaan ICT')->view('mail.email_permohonan');
    }
}
