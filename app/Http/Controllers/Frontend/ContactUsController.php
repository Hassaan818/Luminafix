<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(ContactStoreRequest $request)
    {
        $validatedData = $request->validated();
        Mail::to('waqar@luminafix.com')->send(new ContactMail($validatedData));
        Contact::create($validatedData);
        return to_route('contact.us')->with('message', 'Thanks for Contacting us! we will get back to you soon enough!');
    }
}
