<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->data = $param;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this
            ->from($this->data['from'])
            ->to($this->data['toemail'])
            ->subject($this->data['title'])
            // ->text('mailtmpl.mail')
            ->view('mailtmpl.mail')
            ->with(['content' => $this->data['content']]);
    }
}
