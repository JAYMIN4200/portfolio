<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $query = Skill::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%");
        }

        $skills = $query->ordered()->paginate(10);

        if ($request->ajax()) {
            return view('admin.skills.partials.list', compact('skills'))->render();
        }

        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(SkillRequest $request)
    {
        Skill::create($request->validated());

        return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
