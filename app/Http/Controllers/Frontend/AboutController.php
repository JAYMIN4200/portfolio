<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skill;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        $skills = Skill::ordered()->get();

        return view('pages.about', [
            'skills' => $skills->groupBy('category'),
            'projectCount' => Project::count(),
            'skillCount' => $skills->count(),
            'experienceYears' => $this->yearsOfExperience(),
            'clientCount' => Client::where('status', 'active')->count(),
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'signature_image', 'favicon']),
        ]);
    }

    /**
     * Whole years between the earliest experience start date and now.
     */
    private function yearsOfExperience(): int
    {
        $earliest = Experience::min('start_date');

        if (! $earliest) {
            return 0;
        }

        // min() is an aggregate, so the value comes back uncast.
        return max(0, (int) Carbon::parse($earliest)->diffInYears(now()));
    }
}
