@extends('layouts.admin')
@section('title', 'Projects')
@section('content')

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Projects</h1>
            <p class="text-slate-500 mt-1">Manage your portfolio projects.</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Project
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex flex-wrap gap-2">
                <input type="text" name="search" value="{{ request('search') }}" data-ajax-search placeholder="Search projects..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <select name="featured" data-ajax-filter class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    <option value="">All Projects</option>
                    <option value="1" {{ request('featured') === '1' ? 'selected' : '' }}>Featured Only</option>
                    <option value="0" {{ request('featured') === '0' ? 'selected' : '' }}>Non-Featured Only</option>
                </select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('featured') !== null)
                    <a href="{{ route('admin.projects.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.projects.partials.list')
    </div>

@endsection
