<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MeetingRequest;
use App\Mail\MeetingRequested;
use App\Models\Meeting;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MeetingController extends Controller
{
    public function index()
    {
        return view('pages.meeting');
    }

    public function store(MeetingRequest $request)
    {
        $data = $request->validated();

        if (($data['topic'] ?? null) === Meeting::TOPIC_OTHER) {
            $data['topic'] = $data['topic_other'] ?? null;
        }

        unset($data['topic_other']);

        $meeting = Meeting::create([
            ...$data,
            'status' => 'pending',
            'source' => 'public',
        ]);

        try {
            $recipient = Setting::get('contact_email', User::query()->where('is_admin', true)->value('email'));

            if ($recipient) {
                Mail::to($recipient)->send(new MeetingRequested($meeting));
            }
        } catch (\Throwable $e) {
            report($e);
        }

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Meeting request received! I will confirm the schedule shortly.']);
        }

        return redirect()->route('meetings.book')->with('success', 'Meeting request received! I will confirm the schedule shortly.');
    }
}