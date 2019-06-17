<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\MailTest;


class MailTestController extends Controller
{
      public function mail()
    {
    	$myEmail = 'kambojnancy27@gmail.com';
    	Mail::to($myEmail)->send(new MailTest());

    	
    	dd("Mail Send Successfully");
    }
}
