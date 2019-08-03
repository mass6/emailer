<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var string
     */
    private $message;

    /**
     * Create a new message instance.
     *
     * @param string $message
     */
    public function __construct(string $message)
    {

        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailer')->with([
            'body' => $this->message,
        ]);
    }
}
