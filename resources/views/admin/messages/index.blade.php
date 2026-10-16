@extends('layouts.admin')
@section('title', 'Messages')
@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Messages ({{ $messages->total() }})</h1>
        <p class="text-slate-500 mt-1">Manage messages from the contact form.</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex gap-2 flex-wrap">
                <x-form.input name="search" size="sm" bare :value="request('search')" data-ajax-search placeholder="Search name, email or subject..." class="flex-1 min-w-[200px]" />
                <x-form.select name="status" size="sm" bare :value="request('status')" placeholder="All messages" data-ajax-filter>
                    <option value="unread" @selected((string) request('status') === 'unread')>Unread only</option>
                </x-form.select>
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