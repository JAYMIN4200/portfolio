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
            <form method="GET" class="flex flex-wrap gap-2">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search projects..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <select name="featured" class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    <option value="">All Projects</option>
                    <option value="1" {{ request('featured') === '1' ? 'selected' : '' }}>Featured Only</option>
                    <option value="0" {{ request('featured') === '0' ? 'selected' : '' }}>Non-Featured Only</option>
                </select>
                <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
                @if (request('search') || request('featured') !== null)
                    <a href="{{ route('admin.projects.index') }}" class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
                @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-5 py-3 text-left font-semibold">Project</th>
                        <th class="px-5 py-3 text-left font-semibold">Status</th>
                        <th class="px-5 py-3 text-left font-semibold">Created</th>
                        <th class="px-5 py-3 text-right font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($projects as $project)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-4">
                                    @if ($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-12 h-9 rounded-lg object-cover border border-slate-200">
                                    @else
                                        <div class="w-12 h-9 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-slate-800">{{ $project->title }}</p>
                                        @if ($project->technologies && count($project->technologies) > 0)
                                            <p class="text-xs text-slate-400 mt-0.5">{{ implode(', ', array_slice($project->technologies, 0, 3)) }}{{ count($project->technologies) > 3 ? '...' : '' }}</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-4">
                                @if ($project->is_featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700">Featured</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Regular</span>
                                @endif
                            </td>
                            <td class="px-5 py-4 text-slate-500 text-xs">
                                {{ $project->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-5 py-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" data-confirm="Delete this project?" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-5 py-12 text-center text-slate-400">No projects found. <a href="{{ route('admin.projects.create') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Add your first project.</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-5 py-4 border-t border-slate-200">
            {{ $projects->withQueryString()->links() }}
        </div>
    </div>

@endsection
