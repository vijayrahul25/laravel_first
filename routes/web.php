<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/send-mail', function () {

    $mailData = [        
        'from' => 'itest@itest.com',
        'from_name' => 'Name-Tester',
        'template_view' => 'mails.test',
        'subject' => 'Sending test email',
        'body' => 'This is my test email, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
    ];

    TestMailService::setmailData($mailData);
    TestMailService::sendEmail();
});
