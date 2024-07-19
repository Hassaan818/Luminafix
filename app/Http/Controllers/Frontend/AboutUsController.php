<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    protected $aboutView = 'frontend.about.';
    public function __invoke(Request $request)
    {
        $about = About::first();
        $services = Service::active()->get();
        $teams = Team::active()->get();
        return view($this->aboutView.'index',[
            'about' => $about,
            'teams' => $teams,
            'services' => $services
        ]);
    }
}
