@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
        <p class="text-slate-500 mt-1">Overview of your portfolio content.</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-8">
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ $skills }}</p>
            <p class="text-xs text-slate-500 mt-1">Skills</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ $experiences }}</p>
            <p class="text-xs text-slate-500 mt-1">Experiences</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 7h12M6 11h12M6 15h8m-5 5H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v8"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ $projects }}</p>
            <p class="text-xs text-slate-500 mt-1">Projects</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ $services }}</p>
            <p class="text-xs text-slate-500 mt-1">Services</p>
        </div>

        <a href="{{ route('admin.messages.index') }}" class="bg-white rounded-xl border border-slate-200 p-5 hover:border-indigo-300 hover:shadow-md transition-all group">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center group-hover:bg-red-100 transition-colors relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    @if ($unreadMessages > 0)
                        <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-red-500 text-white text-[10px] font-bold flex items-center justify-center">{{ $unreadMessages }}</span>
                    @endif
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ $messages }}</p>
            <p class="text-xs text-slate-500 mt-1">Messages</p>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-lg font-semibold text-slate-800">Recent Messages</h2>
                <a href="{{ route('admin.messages.index') }}" class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">View All</a>
            </div>

            @forelse ($recentMessages as $msg)
                <div class="flex items-start gap-4 py-4 border-b border-slate-100 last:border-0">
                    <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-semibold text-sm shrink-0">
                        {{ strtoupper(substr($msg->name, 0, 1)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between gap-2 mb-1">
                            <p class="text-sm font-medium text-slate-800 truncate">{{ $msg->name }}</p>
                            @unless ($msg->is_read)
                                <span class="w-2 h-2 rounded-full bg-indigo-500 shrink-0"></span>
                            @endunless
                        </div>
                        <p class="text-xs text-slate-500 truncate">{{ $msg->subject ?: 'No subject' }}</p>
                        <p class="text-xs text-slate-400 mt-1">{{ $msg->created_at->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('admin.messages.show', $msg) }}" class="text-slate-400 hover:text-indigo-600 transition-colors shrink-0" title="View">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            @empty
                <p class="text-slate-400 text-sm text-center py-8">No messages yet.</p>
            @endforelse
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-lg font-semibold text-slate-800 mb-5">Quick Actions</h2>
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('admin.skills.create') }}" class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-indigo-300 hover:bg-indigo-50/50 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-700">Add Skill</span>
                </a>
                <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-emerald-300 hover:bg-emerald-50/50 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-700">Add Project</span>
                </a>
                <a href="{{ route('admin.experiences.create') }}" class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-amber-300 hover:bg-amber-50/50 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-700">Add Experience</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-slate-300 hover:bg-slate-50/50 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-slate-100 text-slate-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <span class="text-sm font-medium text-slate-700">Settings</span>
                </a>
            </div>
        </div>
    </div>

@endsection