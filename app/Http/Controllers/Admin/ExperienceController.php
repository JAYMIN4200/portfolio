<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $query = Experience::query();

        if ($search = $request->input('search')) {
            $query->where('company', 'like', "%{$search}%")
                ->orWhere('position', 'like', "%{$search}%");
        }

        $experiences = $query->ordered()->paginate(10);

        if ($request->ajax()) {
            return view('admin.experiences.partials.list', compact('experiences'))->render();
        }

        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(ExperienceRequest $request)
    {
        $data = $request->validated();
        $data['is_current'] = $request->boolean('is_current');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('experiences', 'public');
        }

        DB::transaction(function () use ($data) {
            if ($data['is_current']) {
                Experience::query()->update(['is_current' => false]);
            }

            Experience::create($data);
        });

        return redirect()->route('admin.experiences.index')->with('success', 'Experience created successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(ExperienceRequest $request, Experience $experience)
    {
        $data = $request->validated();
        $data['is_current'] = $request->boolean('is_current');

        if ($request->hasFile('logo')) {
            if ($experience->logo) {
                Storage::disk('public')->delete($experience->logo);
            }
            $data['logo'] = $request->file('logo')->store('experiences', 'public');
        }

        DB::transaction(function () use ($data, $experience) {
            if ($data['is_current']) {
                Experience::query()->whereKeyNot($experience->getKey())->update(['is_current' => false]);
            }

            $experience->update($data);
        });

        return redirect()->route('admin.experiences.index')->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->logo) {
            Storage::disk('public')->delete($experience->logo);
        }

        $experience->delete();

        return redirect()->route('admin.experiences.index')->with('success', 'Experience deleted successfully.');
    }
}
