<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormSubmitted;
use App\Models\Message;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

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

        try {
            $recipient = Setting::get('contact_email', User::query()->where('is_admin', true)->value('email'));

            if ($recipient) {
                Mail::to($recipient)->send(new ContactFormSubmitted($message));
            }
        } catch (\Throwable $e) {
            report($e);
        }

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you for your message! I will get back to you soon.']);
        }

        return redirect()->route('contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
