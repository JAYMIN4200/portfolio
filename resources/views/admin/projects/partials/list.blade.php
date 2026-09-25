<div data-ajax-content class="transition-opacity">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-5 py-3 text-left font-semibold">Project</th>
                    <th class="px-5 py-3 text-left font-semibold">Status</th>
                    <th class="px-5 py-3 text-left font-semibold">Order</th>
                    <th class="px-5 py-3 text-left font-semibold">Created</th>
                    <th class="px-5 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($projects as $project)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-4">
                                <img src="{{ $project->imageUrl() }}" alt="{{ $project->title }}" class="w-12 h-9 rounded-lg object-cover border border-slate-200">
                                <div>
                                    <p class="font-medium text-slate-800">{{ $project->title }}</p>
                                    @if ($project->technologies && count($project->technologies) > 0)
                                        <p class="text-xs text-slate-400 mt-0.5">{{ implode(', ', array_slice($project->technologies, 0, 3)) }}{{ count($project->technologies) > 3 ? '...' : '' }}</p>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                @if ($project->is_featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700">Featured</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Regular</span>
                                @endif
                                <form method="POST" action="{{ route('admin.projects.toggle-featured', $project) }}" data-quick-toggle class="inline">
                                    @csrf @method('PATCH')
                                    <button type="submit" title="{{ $project->is_featured ? 'Unfeature' : 'Feature' }}" class="p-1 {{ $project->is_featured ? 'text-amber-500 hover:text-amber-600' : 'text-slate-300 hover:text-amber-500' }} transition-colors">
                                        <svg class="w-4 h-4" fill="{{ $project->is_featured ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.075 10.1c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.519-4.674z"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-slate-600 text-xs">{{ $project->sort_order }}</td>
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
                        <td colspan="5" class="px-5 py-12 text-center text-slate-400">No projects found. <a href="{{ route('admin.projects.create') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Add your first project.</a></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-5 py-4 border-t border-slate-200" data-ajax-pagination>
        <x-pagination :paginator="$projects" />
    </div>
</div>