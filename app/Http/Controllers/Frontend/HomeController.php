<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $skills = Skill::limit(5)->get();
    return view('frontend.home',[
        'skills' => $skills
    ]);
    }

    // public function subscribe(SubscriberAddRequest $request)
    // {
    //     Subscriber::create($request->validated());
    //     return to_route('home')->with('message', 'Your message has been sent successfully');
    // }
}
