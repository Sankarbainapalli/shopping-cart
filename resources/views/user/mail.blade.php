<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    //
    public function send(){


    Mail::send(['text'=> 'send'],['name','sankar'],function($message){

    	$message->to('sankar00064@gmail.com','To sankar')->subject('Test email');
    	$message->from('sankar00064@gmail.com','sankar');

    });

}
}


