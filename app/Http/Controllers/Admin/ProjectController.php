<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($search = $request->input('search')) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($request->input('featured') !== null) {
            $query->where('is_featured', $request->boolean('featured'));
        }

        $projects = $query->ordered()->paginate(10);

        if ($request->ajax()) {
            return view('admin.projects.partials.list', compact('projects'))->render();
        }

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        $data['technologies'] = $data['technologies'] ?? [];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $data['technologies'] = $data['technologies'] ?? [];

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function toggleFeatured(Request $request, Project $project)
    {
        $project->update(['is_featured' => ! $project->is_featured]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'is_featured' => $project->is_featured]);
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
