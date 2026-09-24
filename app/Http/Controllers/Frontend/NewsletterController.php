<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        NewsletterSubscriber::create($request->validated());

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Thanks for subscribing!']);
        }

        return redirect()->back()->with('success', 'Thanks for subscribing! Check your inbox for updates.');
    }
}
