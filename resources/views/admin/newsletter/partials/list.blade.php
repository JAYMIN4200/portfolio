<div data-ajax-content class="transition-opacity">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-5 py-3 text-left font-semibold">Email</th>
                    <th class="px-5 py-3 text-left font-semibold">Status</th>
                    <th class="px-5 py-3 text-left font-semibold">Subscribed</th>
                    <th class="px-5 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($subscribers as $subscriber)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <span class="font-medium text-slate-800">{{ $subscriber->email }}</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            @if ($subscriber->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700">Active</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Inactive</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-slate-500 text-xs">{{ $subscriber->created_at->format('M d, Y') }}</td>
                        <td class="px-5 py-4 text-right">
                            <div class="inline-flex items-center gap-1">
                                <form method="POST" action="{{ route('admin.newsletter.destroy', $subscriber) }}" data-confirm="Remove this subscriber?" class="inline">
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
                        <td colspan="4" class="px-5 py-12 text-center text-slate-400">No subscribers yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-5 py-4 border-t border-slate-200" data-ajax-pagination>
        <x-pagination :paginator="$subscribers" />
    </div>
</div>