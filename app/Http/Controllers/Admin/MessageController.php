<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $query = Message::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        if ($request->input('status') === 'unread') {
            $query->unread();
        }

        $messages = $query->latest()->paginate(10);

        if ($request->ajax()) {
            return view('admin.messages.partials.list', compact('messages'))->render();
        }

        return view('admin.messages.index', compact('messages'));
    }

    public function show(Message $message)
    {
        $message->update(['is_read' => true]);

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();

        if (request()->expectsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully.');
    }

    public function markAsRead(Message $message)
    {
        $message->update(['is_read' => ! $message->is_read]);

        return response()->json(['is_read' => $message->is_read]);
    }
}
