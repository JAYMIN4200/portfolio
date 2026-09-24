@extends('layouts.admin')
@section('title', 'Clients')
@section('content')

    @php $statuses = App\Models\Client::STATUSES; @endphp

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Clients</h1>
            <p class="text-slate-500 mt-1">Manage your clients and leads.</p>
        </div>
        <a href="{{ route('admin.clients.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Client
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex gap-2 flex-wrap">
                <input type="text" name="search" value="{{ request('search') }}" data-ajax-search placeholder="Search name, company or email..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <select name="status" data-ajax-filter class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    <option value="">All statuses</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status }}" {{ request('status') === $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                    @endforeach
                </select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('status'))
                    <a href="{{ route('admin.clients.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.clients.partials.list')
    </div>

@endsection