@extends('layouts.admin')
@section('title', 'Messages')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Messages</h1>
        <p class="text-slate-500 mt-1">Manage messages from the contact form.</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex gap-2 flex-wrap">
                <input type="text" name="search" value="{{ request('search') }}" data-ajax-search placeholder="Search name, email or subject..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <select name="status" data-ajax-filter class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    <option value="">All messages</option>
                    <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>Unread only</option>
                </select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('status'))
                    <a href="{{ route('admin.messages.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.messages.partials.list')
    </div>

@endsection

@push('scripts')
<script>
    async function toggleRead(id, btn) {
        const response = await fetch(`/admin/messages/${id}/toggle-read`, {
            method: 'PATCH',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
        });
        const data = await response.json();
        location.reload();
    }
</script>
@endpush