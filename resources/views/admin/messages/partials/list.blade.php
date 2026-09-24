<div data-ajax-content class="transition-opacity">
    <div class="divide-y divide-slate-100">
        @forelse ($messages as $msg)
            <div class="px-5 py-4 flex items-start gap-4 hover:bg-slate-50/50 transition-colors {{ $msg->is_read ? 'opacity-70' : '' }}">
                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-semibold text-sm shrink-0">
                    {{ strtoupper(substr($msg->name, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="text-sm font-semibold text-slate-800">{{ $msg->name }}</h3>
                        @unless ($msg->is_read)
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[10px] font-bold bg-indigo-500 text-white">New</span>
                        @endunless
                        <span class="text-xs text-slate-400 ml-auto shrink-0">{{ $msg->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-xs text-slate-500 mb-1">{{ $msg->email }}{{ $msg->subject ? " — {$msg->subject}" : '' }}</p>
                    <p class="text-sm text-slate-600 line-clamp-2">{{ Str::limit($msg->message, 150) }}</p>
                </div>
                <div class="flex items-center gap-1 shrink-0">
                    <button type="button" onclick="toggleRead({{ $msg->id }}, this)" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="{{ $msg->is_read ? 'Mark unread' : 'Mark read' }}">
                        @if ($msg->is_read)
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        @else
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 19l6.75 4.5M21 19l-6.75 4.5"/></svg>
                        @endif
                    </button>
                    <a href="{{ route('admin.messages.show', $msg) }}" class="p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 transition-colors" title="View">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </a>
                    <form method="POST" action="{{ route('admin.messages.destroy', $msg) }}" data-confirm="Delete this message?" data-delete-ajax class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="Delete">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="px-5 py-12 text-center text-slate-400">No messages found.</div>
        @endforelse
    </div>

    <div class="px-5 py-4 border-t border-slate-200" data-ajax-pagination>
        <x-pagination :paginator="$messages" />
    </div>
</div>