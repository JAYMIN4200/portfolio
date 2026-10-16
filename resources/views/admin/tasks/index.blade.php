@extends('layouts.admin')
@section('title', 'My Tasks')
@section('content')

    @php
        $activeStatus = request('status', 'all');
        $selectedDate = request('date');
        $tabs = ['all' => 'All'] + App\Models\Task::STATUSES;
    @endphp

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">My Tasks</h1>
            <p class="text-slate-500 mt-1">Plan, track and complete your work.</p>
        </div>
        <a href="{{ route('admin.tasks.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Task
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-5 mb-5">
        <form method="GET" action="{{ route('admin.tasks.index') }}" data-ajax-form class="flex gap-2 flex-wrap">
            <input type="hidden" name="status" value="{{ $activeStatus }}">
            <input type="hidden" name="date" value="{{ $selectedDate }}">

            <input type="text" name="search" value="{{ request('search') }}" data-ajax-search placeholder="Search tasks..." class="flex-1 min-w-[200px] px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
            <select name="priority" data-ajax-filter class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <option value="">All priorities</option>
                @foreach (App\Models\Task::PRIORITIES as $value => $label)
                    <option value="{{ $value }}" {{ request('priority') === $value ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
            <select name="category" data-ajax-filter class="px-3 py-2 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}" {{ request('category') === $category ? 'selected' : '' }}>{{ $category }}</option>
                @endforeach
            </select>
            <button type="submit" class="px-4 py-2 rounded-lg border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Search</button>
            @if (request('search') || request('priority') || request('category') || $selectedDate)
                <a href="{{ route('admin.tasks.index') }}" data-ajax-clear class="px-4 py-2 rounded-lg text-sm text-slate-500 hover:text-slate-700">Clear</a>
            @endif
        </form>
    </div>

    <div class="mb-5 flex flex-wrap items-center gap-2">
        @foreach ($tabs as $key => $label)
            @php $isActive = $activeStatus === $key; @endphp
            <button type="button" data-task-status="{{ $key }}"
                class="task-status-tab inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-sm font-medium transition-colors bg-white text-slate-600 ring-1 ring-slate-200 hover:bg-slate-50 {{ $isActive ? 'is-active' : '' }}">
                {{ $label }}
                <span class="task-tab-count rounded-full px-1.5 py-0.5 text-[11px] font-bold bg-slate-100 text-slate-600">{{ $counts[$key] ?? 0 }}</span>
            </button>
        @endforeach

        <span id="taskDateChip" class="{{ $selectedDate ? '' : 'hidden' }} ml-auto inline-flex items-center gap-2 rounded-full bg-indigo-50 px-3 py-1.5 text-xs font-medium text-indigo-700">
            <span>Due on <span id="taskDateLabel">{{ $selectedDate }}</span></span>
            <button type="button" data-task-date-clear class="text-indigo-500 hover:text-indigo-800" aria-label="Clear date filter">&times;</button>
        </span>
    </div>

    <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div class="xl:col-span-2">
            <div class="bg-white rounded-xl border border-slate-200">
                @include('admin.tasks.partials.list')
            </div>
        </div>

        <div class="xl:col-span-1">
            <div data-task-calendar data-endpoint="{{ route('admin.tasks.calendar') }}" data-month="{{ $calendarMonth->format('Y-m') }}"
                class="bg-white rounded-xl border border-slate-200 p-5">
                <div id="taskCalendarPanel">
                    @include('admin.tasks._calendar')
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('[data-ajax-form]');
            const statusInput = form?.querySelector('input[name="status"]');
            const dateInput = form?.querySelector('input[name="date"]');
            const tabs = Array.from(document.querySelectorAll('[data-task-status]'));
            const calendarEl = document.querySelector('[data-task-calendar]');
            const panel = document.getElementById('taskCalendarPanel');
            const dateChip = document.getElementById('taskDateChip');
            const dateLabel = document.getElementById('taskDateLabel');

            const applyList = () => form?.dispatchEvent(new Event('submit', { cancelable: true, bubbles: true }));

            const setActiveTab = (activeTab) => {
                tabs.forEach((tab) => tab.classList.toggle('is-active', tab === activeTab));
            };

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    const status = tab.dataset.taskStatus || 'all';
                    if (statusInput) statusInput.value = status === 'all' ? '' : status;
                    setActiveTab(tab);
                    applyList();
                });
            });

            const updateDateChip = (value) => {
                if (!dateChip || !dateLabel) return;
                dateLabel.textContent = value || '';
                dateChip.classList.toggle('hidden', !value);
            };

            const currentFilters = () => {
                const params = {};
                if (form) {
                    new FormData(form).forEach((value, key) => {
                        if (value !== '' && key !== 'date' && key !== 'page') params[key] = value;
                    });
                }
                return params;
            };

            const loadCalendar = (month, date) => {
                if (!calendarEl || !panel) return;
                const url = new URL(calendarEl.dataset.endpoint, window.location.origin);
                Object.entries(currentFilters()).forEach(([key, value]) => url.searchParams.set(key, value));
                if (month) url.searchParams.set('month', month);
                if (date) url.searchParams.set('date', date);

                fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
                    .then((response) => response.ok ? response.json() : Promise.reject())
                    .then((data) => {
                        if (data.html) panel.innerHTML = data.html;
                        if (data.month) calendarEl.dataset.month = data.month;
                    })
                    .catch(() => {});
            };

            calendarEl?.addEventListener('click', (e) => {
                const nav = e.target.closest('[data-calendar-nav]');
                if (nav) {
                    const [year, month] = (calendarEl.dataset.month || '').split('-').map(Number);
                    const base = new Date(year, (month - 1), 1);
                    base.setMonth(base.getMonth() + (nav.dataset.calendarNav === 'next' ? 1 : -1));
                    const next = base.getFullYear() + '-' + String(base.getMonth() + 1).padStart(2, '0');
                    loadCalendar(next);
                    return;
                }

                const day = e.target.closest('[data-calendar-day]');
                if (day) {
                    const value = day.dataset.calendarDay;
                    const next = (dateInput?.value || '') === value ? '' : value;
                    if (dateInput) dateInput.value = next;
                    updateDateChip(next);
                    applyList();
                    loadCalendar(undefined, next);
                }
            });

            document.querySelector('[data-task-date-clear]')?.addEventListener('click', () => {
                if (dateInput) dateInput.value = '';
                updateDateChip('');
                applyList();
                loadCalendar(undefined, '');
            });
        });
    </script>
@endpush
