<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'skills' => Skill::ordered()->get()->groupBy('category'),
            'experiences' => Experience::ordered()->take(5)->get(),
            'projects' => Project::featured()->ordered()->take(6)->get(),
            'services' => Service::ordered()->get(),
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description']),
        ]);
    }
}
