<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Meeting;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Task;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->input('chart_period', 'week');
        $type = $request->input('chart_type', 'overlay');
        $financialData = $this->financialSeries($period);

        return view('admin.dashboard', [
            'projects' => Project::count(),
            'tasks' => Task::count(),
            'tasksPending' => Task::where('status', 'pending')->count(),
            'totalVisits' => Visit::count(),
            'todayVisits' => Visit::where('visit_date', today())->count(),
            'uniqueVisitors' => Visit::distinct('ip_hash')->count('ip_hash'),
            'pendingMeetings' => Meeting::pending()->count(),
            'paymentsReceived' => (float) Payment::received()->sum('amount'),
            'paymentsPending' => (float) Payment::pending()->sum('amount'),
            'expensesTotal' => (float) Expense::sum('amount'),
            'financialLabels' => $financialData['labels'],
            'financialExpenses' => $financialData['expenses'],
            'financialPayments' => $financialData['payments'],
            'financialPeriod' => $period,
            'financialType' => $type,
            ...$this->calendarData($request),
        ]);
    }

    public function financials(Request $request)
    {
        $period = $request->input('chart_period', 'week');
        $type = $request->input('chart_type', 'overlay');
        $data = $this->financialSeries($period);

        return response()->json([
            'html' => view('admin.partials.financial-chart', [
                'financialLabels' => $data['labels'],
                'financialExpenses' => $data['expenses'],
                'financialPayments' => $data['payments'],
                'financialPeriod' => $period,
                'financialType' => $type,
            ])->render(),
            'period' => $period,
            'type' => $type,
        ]);
    }

    public function calendar(Request $request)
    {
        $month = $this->resolveMonth($request->input('month'));

        return response()->json([
            'html' => view('admin.partials.meeting-calendar', $this->calendarData($request, $month))->render(),
            'label' => $month->format('F Y'),
            'month' => $month->format('Y-m'),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function calendarData(Request $request, ?Carbon $month = null): array
    {
        $month = $month ?? $this->resolveMonth($request->input('month'));

        $monthMeetings = Meeting::whereBetween('meeting_date', [
            $month->copy()->startOfMonth()->toDateString(),
            $month->copy()->endOfMonth()->toDateString(),
        ])
            ->orderBy('meeting_date')
            ->orderBy('meeting_time')
            ->get()
            ->groupBy(fn (Meeting $meeting) => $meeting->meeting_date->toDateString());

        $gridStart = $month->copy()->startOfWeek(Carbon::SUNDAY);
        $gridEnd = $month->copy()->endOfMonth()->endOfWeek(Carbon::SATURDAY);

        $calendarDays = [];
        $cursor = $gridStart->copy();

        while ($cursor->lessThanOrEqualTo($gridEnd)) {
            $calendarDays[] = [
                'date' => $cursor->copy(),
                'inMonth' => $cursor->month === $month->month,
                'isToday' => $cursor->isToday(),
                'meetings' => $monthMeetings->get($cursor->toDateString(), collect()),
            ];
            $cursor->addDay();
        }

        return [
            'calendarMonth' => $month,
            'calendarDays' => $calendarDays,
        ];
    }

    private function resolveMonth(?string $value): Carbon
    {
        try {
            return $value
                ? Carbon::createFromFormat('Y-m', $value)->startOfMonth()
                : Carbon::now()->startOfMonth();
        } catch (\Throwable) {
            return Carbon::now()->startOfMonth();
        }
    }

    /**
     * @return array{labels: string[], expenses: float[], payments: float[]}
     */
    private function financialSeries(string $period = 'week'): array
    {
        $now = Carbon::now();

        if ($period === 'year') {
            $labels = collect(range(11, 0))
                ->map(fn ($i) => $now->copy()->startOfMonth()->subMonths($i)->format('M y'))
                ->values()
                ->all();

            $expenses = collect(range(11, 0))->map(function ($i) use ($now) {
                $month = $now->copy()->startOfMonth()->subMonths($i);

                return (float) Expense::whereBetween('expense_date', [$month->copy()->startOfMonth(), $month->copy()->endOfMonth()])->sum('amount');
            })->all();

            $payments = collect(range(11, 0))->map(function ($i) use ($now) {
                $month = $now->copy()->startOfMonth()->subMonths($i);

                return (float) Payment::received()->whereBetween('payment_date', [$month->copy()->startOfMonth(), $month->copy()->endOfMonth()])->sum('amount');
            })->all();

            return compact('labels', 'expenses', 'payments');
        }

        if ($period === 'month') {
            $labels = collect(range(0, $now->day - 1))
                ->map(fn ($i) => $now->copy()->startOfMonth()->addDays($i)->format('d'))
                ->values()
                ->all();

            $expenses = collect(range(0, $now->day - 1))->map(function ($i) use ($now) {
                $day = $now->copy()->startOfMonth()->addDays($i);

                return (float) Expense::whereDate('expense_date', $day)->sum('amount');
            })->all();

            $payments = collect(range(0, $now->day - 1))->map(function ($i) use ($now) {
                $day = $now->copy()->startOfMonth()->addDays($i);

                return (float) Payment::received()->whereDate('payment_date', $day)->sum('amount');
            })->all();

            return compact('labels', 'expenses', 'payments');
        }

        $labels = collect(range(6, 0))
            ->map(fn ($i) => $now->copy()->subDays($i)->format('D'))
            ->values()
            ->all();

        $expenses = collect(range(6, 0))->map(function ($i) use ($now) {
            $day = $now->copy()->subDays($i);

            return (float) Expense::whereDate('expense_date', $day)->sum('amount');
        })->all();

        $payments = collect(range(6, 0))->map(function ($i) use ($now) {
            $day = $now->copy()->subDays($i);

            return (float) Payment::received()->whereDate('payment_date', $day)->sum('amount');
        })->all();

        return compact('labels', 'expenses', 'payments');
    }
}
