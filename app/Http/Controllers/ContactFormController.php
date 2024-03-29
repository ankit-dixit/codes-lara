<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function create()
    {
    	return view('contact.create');
    }

    public function store()
    {
    	$data = request()->validate([

    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required',

    	]);

    	Mail::to('anildixit01234@gmail.com')->send(new ContactFormMail($data));

    	return redirect('contact')->with('message', 'Thank You For Your Feedback');
    }
}
