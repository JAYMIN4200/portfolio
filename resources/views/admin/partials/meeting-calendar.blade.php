<div>
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-base font-semibold text-slate-800">Meeting Calendar</h2>
        <div class="flex items-center gap-1">
            <button type="button" data-calendar-nav="prev" class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-slate-700" title="Previous month">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
            </button>
            <span class="min-w-32 text-center text-sm font-semibold text-slate-900">{{ $calendarMonth->format('F Y') }}</span>
            <button type="button" data-calendar-nav="next" class="rounded-lg p-1.5 text-slate-500 hover:bg-slate-100 hover:text-slate-700" title="Next month">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-semibold uppercase tracking-wider text-slate-400">
        @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $dayName)
            <div class="py-1.5">{{ $dayName }}</div>
        @endforeach
    </div>

    <div class="grid grid-cols-7 gap-1">
        @foreach ($calendarDays as $day)
            @php
                $isPast = $day['inMonth'] && $day['date']->isPast();
                $meetings = $day['meetings'] ?? collect();
            @endphp
            <div class="min-h-[5.5rem] rounded-lg border p-1.5 {{ $day['inMonth'] ? 'border-slate-200 bg-white' : 'border-transparent bg-slate-50/60' }} {{ $day['isToday'] ? 'ring-2 ring-indigo-400' : '' }}">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold {{ $day['inMonth'] ? 'text-slate-700' : 'text-slate-300' }}">{{ $day['date']->day }}</span>
                    @if ($meetings->isNotEmpty())
                        <span class="rounded-full px-1.5 text-[10px] font-semibold {{ $isPast ? 'bg-red-500 text-white' : 'bg-indigo-600 text-white' }}">{{ $meetings->count() }}</span>
                    @endif
                </div>
                <div class="mt-1 space-y-1">
                    @foreach ($meetings->take(2) as $meeting)
                        <a href="{{ route('admin.meetings.edit', $meeting) }}" class="block truncate rounded bg-indigo-50 px-1.5 py-0.5 text-[10px] font-medium text-indigo-700 hover:bg-indigo-100" title="{{ $meeting->topic ?: 'Meeting' }} — {{ $meeting->name }}">
                            {{ $meeting->meeting_time ? \Illuminate\Support\Str::of($meeting->meeting_time)->substr(0, 5).' ' : '' }}{{ $meeting->name }}
                        </a>
                    @endforeach
                    @if ($meetings->count() > 2)
                        <span class="block px-1.5 text-[10px] text-slate-400">+{{ $meetings->count() - 2 }} more</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
