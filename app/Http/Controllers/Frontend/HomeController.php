<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    return view('frontend.home');
    }

    // public function subscribe(SubscriberAddRequest $request)
    // {
    //     Subscriber::create($request->validated());
    //     return to_route('home')->with('message', 'Your message has been sent successfully');
    // }
}
