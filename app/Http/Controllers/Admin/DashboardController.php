<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Message;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Visit;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'skills' => Skill::count(),
            'experiences' => Experience::count(),
            'projects' => Project::count(),
            'services' => Service::count(),
            'messages' => Message::count(),
            'unreadMessages' => Message::unread()->count(),
            'recentMessages' => Message::latest()->take(5)->get(),
            'subscribers' => NewsletterSubscriber::count(),
            'totalVisits' => Visit::count(),
            'todayVisits' => Visit::where('visit_date', today())->count(),
            'uniqueVisitors' => Visit::distinct('ip_hash')->count('ip_hash'),
        ]);
    }
}
