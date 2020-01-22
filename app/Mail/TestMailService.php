<?php

namespace App\Mail;
use App\Mail\TestMail;
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
       Mail::to($this->mailData['to'])    
    ->send(new TestMail($this->mailData));
       
     $mailTextToStoreInDb = view($this->mailData['template_view'], ['mailData' => $this->mailData])->render();

       if(Mail::failures()) {

         echo "Some Error !!";

       } else {
            echo 'Email Sent. Check your inbox.';           
            echo $mailTextToStoreInDb;
       }
    }

}