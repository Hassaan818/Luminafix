<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    protected $serviceFrontView = 'frontend.service.';

    public function index()
    {
        return view($this->serviceFrontView.'index');
    }

    public function serviceDetail($slug)
    {
        $skills = Skill::get();
        $services = Service::orderBy('created_at')->get();
        $service = Service::where('slug', $slug)->firstOrFail();
        return view($this->serviceFrontView.'service_detail',[
            'service' => $service,
            'skills' => $skills,
            'services' => $services
        ]);
    }
}
