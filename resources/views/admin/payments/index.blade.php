@extends('layouts.admin')
@section('title', 'Payments')
@section('content')

    @php
        $methods = App\Models\Payment::METHODS;
        $statuses = App\Models\Payment::STATUSES;
    @endphp

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Payments &amp; Earnings ({{ $payments->total() }})</h1>
            <p class="text-slate-500 mt-1">Track the payments you receive from clients.</p>
        </div>
        <a href="{{ route('admin.payments.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Payment
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Received</p>
            <p class="mt-1 text-xl font-bold text-emerald-600">&#8377; {{ number_format($totals['received'], 2) }}</p>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Pending</p>
            <p class="mt-1 text-xl font-bold text-amber-600">&#8377; {{ number_format($totals['pending'], 2) }}</p>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Total</p>
            <p class="mt-1 text-xl font-bold text-slate-800">&#8377; {{ number_format($totals['total'], 2) }}</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" data-ajax-form class="flex gap-2 flex-wrap">
                <x-form.input name="search" size="sm" bare :value="request('search')" data-ajax-search placeholder="Search client or reference..." class="flex-1 min-w-[200px]" />
                <x-form.select name="status" size="sm" bare :value="request('status')" placeholder="All statuses" data-ajax-filter>
                    @foreach ($statuses as $value => $label)
                        <option value="{{ $value }}" @selected((string) request('status') === (string) $value)>{{ $label }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select name="method" size="sm" bare :value="request('method')" placeholder="All methods" data-ajax-filter>
                    @foreach ($methods as $value => $label)
                        <option value="{{ $value }}" @selected((string) request('method') === (string) $value)>{{ $label }}</option>
                    @endforeach
                </x-form.select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('status') || request('method'))
                    <a href="{{ route('admin.payments.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        @include('admin.payments.partials.list')
    </div>

@endsection
