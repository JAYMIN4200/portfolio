@extends('layouts.admin')
@section('title', 'Services')
@section('content')

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Services</h1>
            <p class="text-slate-500 mt-1">Manage the services you offer.</p>
        </div>
        <a href="{{ route('admin.services.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Service
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200">
        <div class="p-5 border-b border-slate-200">
            <form method="GET" class="flex gap-2">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search services..." class="flex-1 px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search')) <a href="{{ route('admin.services.index') }}" class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a> @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-5 py-3 text-left font-semibold">Title</th>
                        <th class="px-5 py-3 text-left font-semibold">Description</th>
                        <th class="px-5 py-3 text-left font-semibold">Order</th>
                        <th class="px-5 py-3 text-right font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($services as $service)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-5 py-4 font-medium text-slate-800">{{ $service->title }}</td>
                            <td class="px-5 py-4 text-slate-500 max-w-sm truncate">{{ $service->description }}</td>
                            <td class="px-5 py-4 text-slate-500">{{ $service->sort_order }}</td>
                            <td class="px-5 py-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <a href="{{ route('admin.services.edit', $service) }}" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" data-confirm="Delete this service?" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="px-5 py-12 text-center text-slate-400">No services yet. <a href="{{ route('admin.services.create') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Add your first.</a></td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-5 py-4 border-t border-slate-200">
            {{ $services->withQueryString()->links() }}
        </div>
    </div>

@endsection