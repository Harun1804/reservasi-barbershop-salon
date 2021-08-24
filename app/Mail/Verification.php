<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verification extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    public $from = [
        "address" => "ijigo@mail.com",
        "name" => "it easy going"
    ];

    public $subject = "Verify Your Account";
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
        return $this->from($this->from)
        ->subject($this->subject)
        ->view('mail.verification')
        ->with('data',$this->data);
    }
}
