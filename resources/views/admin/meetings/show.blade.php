@extends('layouts.admin')
@section('title', 'View Meeting')
@section('content')

    @php $badgeColors = ['pending' => 'bg-amber-50 text-amber-700', 'confirmed' => 'bg-emerald-50 text-emerald-700', 'completed' => 'bg-indigo-50 text-indigo-700', 'cancelled' => 'bg-red-50 text-red-700']; @endphp

    <div class="mb-8">
        <a href="{{ route('admin.meetings.index') }}" class="inline-flex items-center gap-1.5 text-sm text-slate-500 hover:text-slate-700 mb-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to meetings
        </a>
        <div class="flex flex-wrap items-center gap-3">
            <h1 class="text-2xl font-bold text-slate-800">Meeting with {{ $meeting->name }}</h1>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $badgeColors[$meeting->status] ?? 'bg-slate-100 text-slate-600' }}">{{ ucfirst($meeting->status) }}</span>
        </div>
    </div>

    <div class="w-full">
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-200">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold text-lg shrink-0">
                            {{ strtoupper(substr($meeting->name, 0, 1)) }}
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-slate-800">{{ $meeting->name }}</h2>
                            <a href="mailto:{{ $meeting->email }}" class="text-indigo-600 hover:text-indigo-700 text-sm">{{ $meeting->email }}</a>
                            <div class="flex flex-wrap gap-x-4 gap-y-1 text-xs text-slate-400 mt-1">
                                @if ($meeting->phone)<span>&#128222; {{ $meeting->phone }}</span>@endif
                                @if ($meeting->company)<span>&#127970; {{ $meeting->company }}</span>@endif
                                <span>Source: {{ ucfirst($meeting->source) }}</span>
                            </div>
                            <p class="text-xs text-slate-400 mt-1">Requested {{ $meeting->created_at->format('M d, Y \a\t g:i A') }} ({{ $meeting->created_at->diffForHumans() }})</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.meetings.destroy', $meeting) }}" data-confirm="Delete this meeting?" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="p-2 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-0.5">Meeting Date</dt>
                            <dd class="text-slate-800 font-medium">{{ $meeting->meeting_date->format('l, F j, Y') }}</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-0.5">Time</dt>
                            <dd class="text-slate-800 font-medium">{{ $meeting->meeting_time ?: '—' }}</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-0.5">Duration</dt>
                            <dd class="text-slate-800 font-medium">{{ $meeting->duration ? $meeting->duration.' minutes' : '—' }}</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-0.5">Topic</dt>
                            <dd class="text-slate-800 font-medium">{{ $meeting->topic ?: '—' }}</dd>
                        </div>
                    </dl>
                </div>
                <div>
                    <dt class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Notes</dt>
                    <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 min-h-[120px]">
                        @if ($meeting->notes)
                            <p class="text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $meeting->notes }}</p>
                        @else
                            <p class="text-slate-400 text-sm">No notes provided.</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="p-4 bg-slate-50 border-t border-slate-200 flex items-center gap-3 flex-wrap">
                <a href="mailto:{{ $meeting->email }}?subject=Re: Meeting on {{ $meeting->meeting_date->format('M d, Y') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Reply via Email
                </a>
                <a href="{{ route('admin.meetings.edit', $meeting) }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-slate-300 text-slate-700 text-sm font-semibold hover:bg-slate-50 transition-colors">
                    Edit Meeting
                </a>
            </div>
        </div>
    </div>

@endsection