@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
        <p class="text-slate-500 mt-1">Overview of your portfolio, tasks and finances.</p>
    </div>

    @php
        $statCards = [
            ['label' => 'Projects', 'value' => number_format($projects), 'route' => 'admin.projects.index', 'iconBg' => 'bg-emerald-50 text-emerald-600', 'iconBgHover' => 'group-hover:bg-emerald-100', 'hoverBorder' => 'hover:border-emerald-300', 'icon' => 'M6 7h12M6 11h12M6 15h8m-5 5H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v8'],
            ['label' => 'My Tasks', 'value' => number_format($tasks), 'route' => 'admin.tasks.index', 'iconBg' => 'bg-blue-50 text-blue-600', 'iconBgHover' => 'group-hover:bg-blue-100', 'hoverBorder' => 'hover:border-blue-300', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'badge' => $tasksPending],
            ['label' => 'Payments Received', 'value' => '₹ '.number_format($paymentsReceived, 2), 'route' => 'admin.payments.index', 'iconBg' => 'bg-indigo-50 text-indigo-600', 'iconBgHover' => 'group-hover:bg-indigo-100', 'hoverBorder' => 'hover:border-indigo-300', 'icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 002-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z'],
            ['label' => 'Total Expenses', 'value' => '₹ '.number_format($expensesTotal, 2), 'route' => 'admin.expenses.index', 'iconBg' => 'bg-amber-50 text-amber-600', 'iconBgHover' => 'group-hover:bg-amber-100', 'hoverBorder' => 'hover:border-amber-300', 'icon' => 'M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6'],
        ];
    @endphp

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        @foreach ($statCards as $card)
            <a href="{{ route($card['route']) }}" class="bg-white rounded-xl border border-slate-200 p-5 {{ $card['hoverBorder'] }} hover:shadow-md transition-all group">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-lg {{ $card['iconBg'] }} {{ $card['iconBgHover'] }} flex items-center justify-center transition-colors relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"/></svg>
                        @if (!empty($card['badge']) && $card['badge'] > 0)
                            <span class="absolute -top-1 -right-1 min-w-4 h-4 px-1 rounded-full bg-red-500 text-white text-[10px] font-bold flex items-center justify-center">{{ $card['badge'] }}</span>
                        @endif
                    </div>
                </div>
                <p class="text-xl font-bold text-slate-800">{{ $card['value'] }}</p>
                <p class="text-xs text-slate-500 mt-1">{{ $card['label'] }}</p>
            </a>
        @endforeach
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ number_format($totalVisits) }}</p>
            <p class="text-xs text-slate-500 mt-1">Total Visits</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ number_format($todayVisits) }}</p>
            <p class="text-xs text-slate-500 mt-1">Visits Today</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-cyan-50 text-cyan-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 10-2-7.5 4 4 0 002 7.5zm6 2a3 3 0 10-2-5.62"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ number_format($uniqueVisitors) }}</p>
            <p class="text-xs text-slate-500 mt-1">Unique Visitors</p>
        </div>

        <a href="{{ route('admin.newsletter.index') }}" class="bg-white rounded-xl border border-slate-200 p-5 hover:border-indigo-300 hover:shadow-md transition-all group">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-slate-800">{{ number_format($subscribers) }}</p>
            <p class="text-xs text-slate-500 mt-1">Newsletter Subscribers</p>
        </a>
    </div>

    @php
        $periods = ['week' => 'Week', 'month' => 'Month', 'year' => 'Year'];
        $types = ['overlay' => 'Expenses vs Payments', 'expenses' => 'Expenses only', 'payments' => 'Payments only'];
    @endphp

    <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6" data-financial-chart data-endpoint="{{ route('admin.dashboard.financials') }}">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-5">
            <h2 class="text-lg font-semibold text-slate-800">Expenses vs Payments</h2>
            <div class="flex flex-wrap items-center gap-2">
                <div class="inline-flex rounded-lg border border-slate-200 p-0.5">
                    @foreach ($periods as $value => $label)
                        <button type="button" data-chart-period="{{ $value }}"
                            class="rounded-md px-3 py-1.5 text-xs font-semibold transition-colors {{ $financialPeriod === $value ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-500 hover:bg-slate-100' }}">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>
                <select data-chart-type class="px-3 py-1.5 rounded-lg border border-slate-300 text-xs font-medium text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                    @foreach ($types as $value => $label)
                        <option value="{{ $value }}" {{ $financialType === $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div id="financialChartPanel">
            @include('admin.partials.financial-chart')
        </div>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-6" data-meeting-calendar data-endpoint="{{ route('admin.dashboard.calendar') }}" data-month="{{ $calendarMonth->format('Y-m') }}">
        <div id="meetingCalendarPanel">
            @include('admin.partials.meeting-calendar')
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const chartEl = document.querySelector('[data-financial-chart]');
            const chartPanel = document.getElementById('financialChartPanel');
            const periodButtons = Array.from(chartEl?.querySelectorAll('[data-chart-period]') ?? []);
            const typeSelect = chartEl?.querySelector('[data-chart-type]');
            let period = periodButtons.find((b) => b.classList.contains('bg-indigo-600'))?.dataset.chartPeriod ?? 'week';

            const setActivePeriod = (active) => periodButtons.forEach((btn) => {
                const isActive = btn === active;
                btn.classList.toggle('bg-indigo-600', isActive);
                btn.classList.toggle('text-white', isActive);
                btn.classList.toggle('shadow-sm', isActive);
                btn.classList.toggle('text-slate-500', !isActive);
                btn.classList.toggle('hover:bg-slate-100', !isActive);
            });

            const loadChart = () => {
                if (!chartEl || !chartPanel) return;
                const url = new URL(chartEl.dataset.endpoint, window.location.origin);
                url.searchParams.set('chart_period', period);
                url.searchParams.set('chart_type', typeSelect?.value ?? 'overlay');

                fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
                    .then((response) => response.ok ? response.json() : Promise.reject())
                    .then((data) => { if (data.html) chartPanel.innerHTML = data.html; })
                    .catch(() => {});
            };

            periodButtons.forEach((btn) => btn.addEventListener('click', () => {
                period = btn.dataset.chartPeriod;
                setActivePeriod(btn);
                loadChart();
            }));
            typeSelect?.addEventListener('change', loadChart);

            const calendarEl = document.querySelector('[data-meeting-calendar]');
            const calendarPanel = document.getElementById('meetingCalendarPanel');
            calendarEl?.addEventListener('click', (e) => {
                const nav = e.target.closest('[data-calendar-nav]');
                if (!nav || !calendarPanel) return;

                const [year, month] = (calendarEl.dataset.month || '').split('-').map(Number);
                const base = new Date(year, (month - 1), 1);
                base.setMonth(base.getMonth() + (nav.dataset.calendarNav === 'next' ? 1 : -1));
                const nextMonth = base.getFullYear() + '-' + String(base.getMonth() + 1).padStart(2, '0');

                const url = new URL(calendarEl.dataset.endpoint, window.location.origin);
                url.searchParams.set('month', nextMonth);

                fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
                    .then((response) => response.ok ? response.json() : Promise.reject())
                    .then((data) => {
                        if (data.html) calendarPanel.innerHTML = data.html;
                        if (data.month) calendarEl.dataset.month = data.month;
                    })
                    .catch(() => {});
            });
        });
    </script>
@endpush
