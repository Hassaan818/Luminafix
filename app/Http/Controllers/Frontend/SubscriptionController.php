<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionAddRequest;
use App\Mail\SubscriptionMail;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function store(SubscriptionAddRequest $request) 
    {
        $validatedData = $request->validated();
        Subscription::create($validatedData);
        Mail::to('waqar@luminafix.com')->send(new SubscriptionMail($validatedData));
        return to_route('home')->with('message', 'Thanks for Subscribing');
    }
}
