<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
// use Barryvdh\DomPDF\Facade\PDF;

class MailControllar extends Controller
{
    public function send() {

            $data['email']= "e550@gmail.com";
            $data['title'] = "form aboooooooooood";
            $data['body'] = "this test forgxamble";
            $pdf =pdf::loadview('emails.test',$data);
            $data['pdf']=$pdf;


            Mail::to($data['email'])->send(new testMail($data));
            dd('mail sent successfully');

    }
}
