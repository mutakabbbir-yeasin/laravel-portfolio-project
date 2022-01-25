<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function store()
    {
        $contact_form_data = request()->all();
        Mail::to('demo.demo4409@gmail.com')->send(new ContactFormMail($contact_form_data));

        return redirect()->route('home', '/#contact')->with('success', 'Your message has been submitted successfully, Alhamdulillah');
    }
}
