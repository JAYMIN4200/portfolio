@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
        <p class="text-slate-500 mt-1">Overview of your portfolio, tasks and finances.</p>
    </div>

    @php
        $statCards = [
            [
                'label' => 'Total Visits',
                'value' => number_format($totalVisits),
                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'chip' => 'bg-indigo-50 text-indigo-600 ring-indigo-100',
                'accent' => 'from-indigo-400 to-violet-500',
                'hoverBorder' => 'hover:border-indigo-300',
            ],
            [
                'label' => 'Visits Today',
                'value' => number_format($todayVisits),
                'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                'chip' => 'bg-sky-50 text-sky-600 ring-sky-100',
                'accent' => 'from-sky-400 to-cyan-500',
                'hoverBorder' => 'hover:border-sky-300',
            ],
            [
                'label' => 'Unique Visitors',
                'value' => number_format($uniqueVisitors),
                'icon' => 'M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-1.13a4 4 0 10-2-7.5 4 4 0 002 7.5zm6 2a3 3 0 10-2-5.62',
                'chip' => 'bg-cyan-50 text-cyan-600 ring-cyan-100',
                'accent' => 'from-cyan-400 to-teal-500',
                'hoverBorder' => 'hover:border-cyan-300',
            ],
            [
                'label' => 'Total Expenses',
                'value' => number_format($expensesTotal, 2),
                'currency' => true,
                'route' => 'admin.expenses.index',
                'icon' => 'M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6',
                'chip' => 'bg-rose-50 text-rose-600 ring-rose-100',
                'accent' => 'from-rose-400 to-red-500',
                'hoverBorder' => 'hover:border-rose-300',
                'valueSize' => 'text-xl',
            ],
        ];
    @endphp

    @php
        $primaryCards = [
            [
                'label' => 'Projects',
                'value' => number_format($projects),
                'route' => 'admin.projects.index',
                'icon' => 'M6 7h12M6 11h12M6 15h8m-5 5H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v8',
                'chip' => 'bg-emerald-50 text-emerald-600 ring-emerald-100',
                'accent' => 'from-emerald-400 to-teal-500',
                'hoverBorder' => 'hover:border-emerald-300',
            ],
            [
                'label' => 'My Tasks',
                'value' => number_format($tasks),
                'route' => 'admin.tasks.index',
                'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
                'chip' => 'bg-blue-50 text-blue-600 ring-blue-100',
                'accent' => 'from-blue-400 to-indigo-500',
                'hoverBorder' => 'hover:border-blue-300',
                'badge' => $tasksPending > 0 ? $tasksPending . ' pending' : null,
            ],
            [
                'label' => 'Pending',
                'value' => number_format($paymentsPending, 2),
                'currency' => true,
                'route' => 'admin.payments.index',
                'params' => ['status' => App\Models\Payment::STATUS_PENDING],
                'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                'chip' => 'bg-amber-50 text-amber-600 ring-amber-100',
                'accent' => 'from-amber-400 to-orange-500',
                'hoverBorder' => 'hover:border-amber-300',
                'valueSize' => 'text-xl',
            ],
            [
                'label' => 'Received',
                'value' => number_format($paymentsReceived, 2),
                'currency' => true,
                'route' => 'admin.payments.index',
                'params' => ['status' => App\Models\Payment::STATUS_RECEIVED],
                'icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                'chip' => 'bg-emerald-50 text-emerald-600 ring-emerald-100',
                'accent' => 'from-emerald-400 to-green-500',
                'hoverBorder' => 'hover:border-emerald-300',
                'valueSize' => 'text-xl',
            ],
        ];
    @endphp

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
        @foreach ($primaryCards as $card)
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg {{ $card['hoverBorder'] }}">
                <span class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r {{ $card['accent'] }} opacity-70 transition-opacity group-hover:opacity-100"></span>

                @isset($card['route'])
                    <a href="{{ route($card['route'], $card['params'] ?? []) }}" class="absolute inset-0 rounded-2xl focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500" aria-label="{{ $card['label'] }}"></a>
                @endisset

                <span class="flex h-10 w-10 items-center justify-center rounded-xl ring-1 ring-inset transition-transform duration-200 group-hover:scale-105 {{ $card['chip'] }}">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"/></svg>
                </span>

                <p class="mt-4 font-bold tracking-tight text-slate-900 {{ $card['valueSize'] ?? 'text-2xl' }}">@if (!empty($card['currency']))&#8377; @endif{{ $card['value'] }}</p>
                <p class="mt-1 text-xs font-medium text-slate-500">
                    {{ $card['label'] }}
                    @if (!empty($card['badge']))
                        <span class="ml-1 inline-block rounded-full bg-red-50 px-1.5 py-0.5 text-[10px] font-bold text-red-600 ring-1 ring-inset ring-red-100">{{ $card['badge'] }}</span>
                    @endif
                </p>
            </div>
        @endforeach
    </div>

    {{-- Traffic & expenses --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @foreach ($statCards as $card)
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg {{ $card['hoverBorder'] }}">
                <span class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r {{ $card['accent'] }} opacity-70 transition-opacity group-hover:opacity-100"></span>

                @isset($card['route'])
                    <a href="{{ route($card['route'], $card['params'] ?? []) }}" class="absolute inset-0 rounded-2xl focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500" aria-label="{{ $card['label'] }}"></a>
                @endisset

                <span class="flex h-10 w-10 items-center justify-center rounded-xl ring-1 ring-inset transition-transform duration-200 group-hover:scale-105 {{ $card['chip'] }}">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"/></svg>
                </span>

                <p class="mt-4 font-bold tracking-tight text-slate-900 {{ $card['valueSize'] ?? 'text-2xl' }}">@if (!empty($card['currency']))&#8377; @endif{{ $card['value'] }}</p>
                <p class="mt-1 text-xs font-medium text-slate-500">{{ $card['label'] }}</p>
            </div>
        @endforeach
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
                <x-form.select name="chart_type" size="sm" bare :value="$financialType" data-chart-type>
                    @foreach ($types as $value => $label)
                        <option value="{{ $value }}" {{ $financialType === $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </x-form.select>
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
