@extends('layouts.admin')
@section('title', 'Newsletter')
@section('content')

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Newsletter Subscribers</h1>
            <p class="text-slate-500 mt-1">People who subscribed to your newsletter.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex flex-wrap gap-2">
                <input type="text" name="search" value="{{ request('search') }}" data-ajax-search placeholder="Search by email..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search'))
                    <a href="{{ route('admin.newsletter.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.newsletter.partials.list')
    </div>

@endsection