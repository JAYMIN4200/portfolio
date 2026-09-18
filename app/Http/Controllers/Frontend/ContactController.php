<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        Message::create($request->validated());

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you for your message! I will get back to you soon.']);
        }

        return redirect()->route('contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
