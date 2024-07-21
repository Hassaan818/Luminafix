<?php

namespace App\Http\ViewComposers;

use App\Models\About;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\View\View;
 
class SettingComposer
{
     public function compose(View $view): void
     {
        $about = About::first();
        $services = Service::get();
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->get();
        $projects = Project::active()->get();
        $setting = Setting::first();
	     $view->with('setting', $setting);
	     $view->with('about', $about);
	     $view->with('testimonials', $testimonials);
	     $view->with('services', $services);
	     $view->with('projects', $projects);

     }
}