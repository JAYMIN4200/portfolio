<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::visible()->ordered()->get();

        if ($testimonials->isNotEmpty() && $testimonials->count() > 1) {
            $first = $testimonials->random(1)->first();
            $testimonials = $testimonials->reject(fn ($t) => $t->is($first))->prepend($first)->values();
        }

        return view('pages.home', [
            'skills' => Skill::ordered()->get()->groupBy('category'),
            'experiences' => Experience::ordered()->take(5)->get(),
            'projects' => Project::featured()->ordered()->take(6)->get(),
            'services' => Service::ordered()->get(),
            'testimonials' => $testimonials,
            'clients' => Client::where('status', 'active')->latest()->get(),
            'settings' => Setting::getMany(['site_title', 'site_tagline', 'site_description', 'signature_image', 'favicon', 'hero_words']),
        ]);
    }

    public function downloadResume(): BinaryFileResponse
    {
        $profile = Profile::first();

        if (! $profile || ! $profile->resume_path) {
            abort(404);
        }

        $path = Storage::disk('public')->path($profile->resume_path);

        if (! file_exists($path)) {
            abort(404);
        }

        $profile->increment('resume_downloads');

        return response()->download($path, 'resume_'.now()->format('Ymd').'.pdf');
    }
}
