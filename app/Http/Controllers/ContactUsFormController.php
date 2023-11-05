<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    public function show(){
        // show the contact Us form
        return view('contactForm');
    }

    public function store(Request $request){
        
        // form validation
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','email'],
            'phone' => ['required','regex:^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$','min:10'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        // store in database
        ContactForm::create($request->all());

        //return back to contact form
        return back()->with('success', "Your message has been recieved, thank you for writing to us");
    }
}
