<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SampleMail;
class SendMailController extends Controller
{
  
    public function index (Request $content)
    {
      

        Mail::to('abeir@gmail.com')->send(new SampleMail( $content->name,$content->email,$content->phone,
        $content->subject ,$content->message));
        return redirect('contact');
    }
}
