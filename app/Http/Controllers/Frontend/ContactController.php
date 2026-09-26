<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormAcknowledgement;
use App\Mail\ContactFormSubmitted;
use App\Models\Message;
use App\Support\NotificationMailer;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        if (($data['subject'] ?? null) === 'Other' && filled($data['subject_other'] ?? null)) {
            $data['subject'] = 'Other: '.$data['subject_other'];
        }

        unset($data['subject_other']);

        $message = Message::create($data);

        $this->sendNotificationEmails($message);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you for your message! I will get back to you soon.']);
        }

        return redirect()->route('contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }

    /**
     * Notify the owner of the new enquiry and send the visitor a thank-you.
     * Delivery problems are logged by the mailer, never surfaced to the
     * visitor, because the enquiry is already saved either way.
     */
    private function sendNotificationEmails(Message $message): void
    {
        $mailer = app(NotificationMailer::class);

        $mailer->toOwner(new ContactFormSubmitted($message), 'contact.owner_notification');
        $mailer->toSender(
            new ContactFormAcknowledgement($message, $mailer->ownerAddress() ?? config('mail.from.address')),
            'contact.acknowledgement',
            $message->email,
        );
    }
}
