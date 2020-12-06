<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\sendMessage;
use Illuminate\Support\Facades\Mail;

class contactcontroller extends Controller

{
    public function create()
    {
        return view('employees/create');
    }
    
    public function store(Request $request)

    {

        //save in Database
        /*$contact = new contact();
        $contact->name= request('name');
        $contact->phone= request('phone');
        $contact->email= request('email');
        $contact->subject= request('subject');
        $contact->body= request('body');
        $contact->save();*/

        $name= $request->input('name');
        $phone= $request->input('phone');
        $email= $request->input('email');
        $subject= $request->input('subject');
        $body= $request->input('body');

        //Send mail via mailtrap
      Mail::to('bassantelbakry7@gmail.com')
      ->send(new sendMessage($name,$phone,$email,$subject,$body));

      //return redirect()->back()->withSuccess('IT WORKS!');
      //return redirect()->back()->with('message', 'IT WORKS!');

     // return redirect('/contact')->with('success','I got Your Message and i will answer you soon ...... ');


    }

}
