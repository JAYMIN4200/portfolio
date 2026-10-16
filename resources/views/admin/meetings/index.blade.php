@extends('layouts.admin')
@section('title', 'Meetings')
@section('content')

    @php $statuses = App\Models\Meeting::STATUSES; @endphp

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Meetings ({{ $meetings->total() }})</h1>
            <p class="text-slate-500 mt-1">Manage meeting requests from the website and your own schedule.</p>
        </div>
        <a href="{{ route('admin.meetings.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Meeting
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex gap-2 flex-wrap">
                <x-form.input name="search" size="sm" bare :value="request('search')" data-ajax-search placeholder="Search name, email or company..." class="flex-1 min-w-[200px]" />
                <x-form.select name="status" size="sm" bare :value="request('status')" placeholder="All statuses" data-ajax-filter>
                    @foreach ($statuses as $status)
                        <option value="{{ $status }}" @selected((string) request('status') === (string) $status)>{{ ucfirst($status) }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select name="source" size="sm" bare :value="request('source')" placeholder="All sources" data-ajax-filter>
                    <option value="public" @selected((string) request('source') === 'public')>From website</option>
                    <option value="admin" @selected((string) request('source') === 'admin')>Added by admin</option>
                </x-form.select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('status') || request('source'))
                    <a href="{{ route('admin.meetings.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.meetings.partials.list')
    </div>

@endsection