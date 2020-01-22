<?php

namespace App\Mail;
//use App\Mail\TestMail;
use Mail;

class TestMailService {
    public $mailData;

    public function setmailData($mailData) 
    {
        $this->mailData = $mailData;
    }

    public function getmailData()
    {
        return $this->mailData;
    }

    public function sendEmail() {
        print_r( $this->mailData);
        $data = array('name' => 'Jordan');
	
        Mail::send('mails.test', $data, function($message)
        {
            $message->to('example@outlook.com')
            ->subject('Hi there!  Laravel sent me!');
        });
    }

}