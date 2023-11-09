<?php

namespace App\Http\Controllers;

use App\Mail\contactUs;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'phone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'subject' => ['required'],
            'message' => ['required']
        ],[
            'name.required' => 'Name field required',
            'email.required' => 'Email field required',
            'email.email' => 'Please enter correct format',
            'phone.required' => 'Phone field required',
            'phone.regex:/^([0-9\s\-\+\(\)]*)$/' => 'Enter correct format',
            'phone.min' => "10 digits required",
            'subject.required' => 'Subject field required',
            'message.required' => 'Message field required'
        ]);

        // store in database
        $contact = ContactForm::create($request->all());

        Mail::to('ngcwembelihle@gmail.com')->send( new contactUs($contact));

        //return back to contact form
        return back()->withInput()->with('success', "Your message has been recieved, thank you for writing to us");
    }
}
