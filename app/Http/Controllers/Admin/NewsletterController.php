<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
        $query = NewsletterSubscriber::query();

        if ($search = $request->input('search')) {
            $query->where('email', 'like', "%{$search}%");
        }

        $subscribers = $query->latest()->paginate(10);

        if ($request->ajax()) {
            return view('admin.newsletter.partials.list', compact('subscribers'))->render();
        }

        return view('admin.newsletter.index', compact('subscribers'));
    }

    public function destroy(NewsletterSubscriber $subscriber)
    {
        $subscriber->delete();

        if (request()->expectsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('admin.newsletter.index')->with('success', 'Subscriber removed.');
    }
}
