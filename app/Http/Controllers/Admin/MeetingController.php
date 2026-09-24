<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminMeetingRequest;
use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index(Request $request)
    {
        $query = Meeting::query();

        $query->status($request->input('status'));

        if ($request->input('source') === 'public' || $request->input('source') === 'admin') {
            $query->where('source', $request->input('source'));
        }

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%");
            });
        }

        $meetings = $query->latest('meeting_date')->paginate(10);

        if ($request->ajax()) {
            return view('admin.meetings.partials.list', compact('meetings'))->render();
        }

        return view('admin.meetings.index', compact('meetings'));
    }

    public function create()
    {
        return view('admin.meetings.create');
    }

    public function store(AdminMeetingRequest $request)
    {
        $data = $request->validated();
        $data['source'] = 'admin';

        Meeting::create($data);

        return redirect()->route('admin.meetings.index')->with('success', 'Meeting added successfully.');
    }

    public function show(Meeting $meeting)
    {
        return view('admin.meetings.show', compact('meeting'));
    }

    public function edit(Meeting $meeting)
    {
        return view('admin.meetings.edit', compact('meeting'));
    }

    public function update(AdminMeetingRequest $request, Meeting $meeting)
    {
        $meeting->update($request->validated());

        return redirect()->route('admin.meetings.index')->with('success', 'Meeting updated successfully.');
    }

    public function destroy(Meeting $meeting)
    {
        $meeting->delete();

        return redirect()->route('admin.meetings.index')->with('success', 'Meeting deleted successfully.');
    }
}