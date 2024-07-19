<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    protected $teamFrontView = 'frontend.team.';
    public function index()
    {
        $setting = Setting::first();
        $teams = Team::active()->get();
        $services = Service::active()->get();
        return view($this->teamFrontView.'index',[
            'teams' => $teams,
            'services' => $services,
            'setting' => $setting,
        ]);
    }

    public function teamDetail($slug)
    {
        $setting = Setting::first();
        $team = Team::where('slug', $slug)->firstOrFail();
        $services = Service::orderBy('created_at')->get();
        return view($this->teamFrontView.'team_detail',[
            'team' => $team,
            'services' => $services,
            'setting' => $setting
        ]);
    }
}
