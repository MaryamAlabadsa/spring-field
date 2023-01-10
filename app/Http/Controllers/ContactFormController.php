<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $organization = $request['organization'];
        $job_title = $request['job_title'];
        $msg = $request['message'];
        $email_from = $name . '<' . $email . '>';

//        $headers = "MIME-Version: 1.1";
//        $headers .= "Content-type: text/html; charset=iso-8859-1";
        $headers = "From: " . $name . '<' . $email . '>' . "\r\n"; // Sender's E-mail
//        $headers .= "Return-Path:" . "From:" . $email;

        $message = "\n";
        $message .= 'Name : ' . $name . "\n"
            . 'Email : ' . $email . "\n"
            . 'Phone : ' . $phone . "\n"
            . 'organization : ' . $organization . "\n"
            . 'job_title : ' . $job_title . "\n"
            . 'Message : ' . $msg;
        $mailData = [
            'email_from' => $email_from,
            'headers' => $headers,
            'message' => $message,
        ];

        \Illuminate\Support\Facades\Mail::to('maryamalabadsa@gmail.com')->send(new \App\Mail\TestEmail($mailData));

        echo 'sent';
    }
}
