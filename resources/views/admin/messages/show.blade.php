@extends('layouts.admin')
@section('title', 'View Message')
@section('content')

    <div class="mb-8">
        <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center gap-1.5 text-sm text-slate-500 hover:text-slate-700 mb-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to messages
        </a>
        <h1 class="text-2xl font-bold text-slate-800">Message from {{ $message->name }}</h1>
    </div>

    <div class="w-full">
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold text-lg shrink-0">
                            {{ strtoupper(substr($message->name, 0, 1)) }}
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-800">{{ $message->name }}</h2>
                            <a href="mailto:{{ $message->email }}" class="text-indigo-600 hover:text-indigo-700 text-sm">{{ $message->email }}</a>
                            @if ($message->subject)
                                <p class="text-slate-600 text-sm mt-1">Re: {{ $message->subject }}</p>
                            @endif
                            <p class="text-xs text-slate-400 mt-1">Sent {{ $message->created_at->format('M d, Y \a\t g:i A') }} ({{ $message->created_at->diffForHumans() }})</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" data-confirm="Delete this message?" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="p-2 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="p-6">
                <div class="prose prose-slate max-w-none">
                    <p class="text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}</p>
                </div>
            </div>

            <div class="p-4 bg-slate-50 border-t border-slate-200 flex items-center gap-3">
                <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject ?? 'Your message' }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Reply via Email
                </a>
            </div>
        </div>
    </div>

@endsection