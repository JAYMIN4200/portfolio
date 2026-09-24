<div data-ajax-content class="transition-opacity">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-5 py-3 text-left font-semibold">Client</th>
                    <th class="px-5 py-3 text-left font-semibold">Contact</th>
                    <th class="px-5 py-3 text-left font-semibold">Project Type</th>
                    <th class="px-5 py-3 text-left font-semibold">Status</th>
                    <th class="px-5 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($clients as $client)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-5 py-4">
                            <p class="font-medium text-slate-800">{{ $client->name }}</p>
                            @if ($client->company)
                                <p class="text-xs text-slate-400">{{ $client->company }}</p>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-slate-500">
                            @if ($client->email)
                                <p class="text-sm">{{ $client->email }}</p>
                            @endif
                            @if ($client->phone)
                                <p class="text-xs text-slate-400">{{ $client->phone }}</p>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-slate-500">{{ $client->project_type ?: '—' }}</td>
                        <td class="px-5 py-4">
                            @php $badgeColors = ['lead' => 'bg-amber-50 text-amber-700', 'active' => 'bg-emerald-50 text-emerald-700', 'completed' => 'bg-indigo-50 text-indigo-700', 'inactive' => 'bg-slate-100 text-slate-600']; @endphp
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $badgeColors[$client->status] ?? 'bg-slate-100 text-slate-600' }}">{{ ucfirst($client->status) }}</span>
                        </td>
                        <td class="px-5 py-4 text-right">
                            <div class="inline-flex items-center gap-1">
                                <a href="{{ route('admin.clients.edit', $client) }}" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </a>
                                <form method="POST" action="{{ route('admin.clients.destroy', $client) }}" data-confirm="Delete this client?" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-5 py-12 text-center text-slate-400">No clients yet. <a href="{{ route('admin.clients.create') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Add your first.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-5 py-4 border-t border-slate-200" data-ajax-pagination>
        <x-pagination :paginator="$clients" />
    </div>
</div>