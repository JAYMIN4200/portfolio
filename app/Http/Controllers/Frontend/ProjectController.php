<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::ordered()->paginate(10);

        return view('pages.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }
}
