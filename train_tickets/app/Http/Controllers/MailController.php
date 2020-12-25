<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function attachment_email(Request $request) {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
           $message->to('abc@gmail.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
      //   echo "Email Sent with attachment. Check your inbox.";
     }
}