<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class MailController extends Controller
{
    public function home() 
    {
        return view('welcome');
    }

    public function mail()
    {
        $name = "Dayat";
        Mail::to('dayat_qks@hotmail.com')->send(new SendMailable($name));
        
        return 'Email was sent';
        //return view('mail');
    }
}
