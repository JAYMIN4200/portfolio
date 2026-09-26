<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MeetingRequest;
use App\Mail\MeetingAcknowledgement;
use App\Mail\MeetingRequested;
use App\Models\Meeting;
use App\Support\NotificationMailer;

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

        $this->sendNotificationEmails($meeting);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Meeting request received! I will confirm the schedule shortly.']);
        }

        return redirect()->route('meetings.book')->with('success', 'Meeting request received! I will confirm the schedule shortly.');
    }

    /**
     * Notify the owner of the new booking and send the visitor a thank-you.
     * Delivery problems are logged by the mailer, never surfaced to the
     * visitor, because the request is already saved either way.
     */
    private function sendNotificationEmails(Meeting $meeting): void
    {
        $mailer = app(NotificationMailer::class);

        $mailer->toOwner(new MeetingRequested($meeting), 'meeting.owner_notification');
        $mailer->toSender(
            new MeetingAcknowledgement($meeting, $mailer->ownerAddress() ?? config('mail.from.address')),
            'meeting.acknowledgement',
            $meeting->email,
        );
    }
}
