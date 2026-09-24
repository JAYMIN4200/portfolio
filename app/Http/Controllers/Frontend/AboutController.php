<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Skill;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'skills' => Skill::ordered()->get()->groupBy('category'),
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'signature_image', 'favicon']),
        ]);
    }
}
