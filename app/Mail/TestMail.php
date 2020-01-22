<?php

namespace App\Mail;

use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */    
    public function build()
    {
        return $this->from($this->mailData['from'], $this->mailData['from_name'])
            ->subject($this->mailData['subject'])
            ->view($this->mailData['template_view']);
    }
}

