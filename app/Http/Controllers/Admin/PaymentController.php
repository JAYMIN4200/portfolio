<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Client;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = $this->filteredQuery($request);

        $totals = [
            'received' => (clone $query)->received()->sum('amount'),
            'pending' => (clone $query)->pending()->sum('amount'),
            'total' => (clone $query)->sum('amount'),
        ];

        $payments = $query->with('client')
            ->orderByDesc('payment_date')
            ->orderByDesc('id')
            ->paginate(10)
            ->withQueryString();

        $clients = Client::orderBy('name')->get();

        if ($request->ajax()) {
            return view('admin.payments.partials.list', compact('payments', 'totals'))->render();
        }

        return view('admin.payments.index', compact('payments', 'totals', 'clients'));
    }

    public function create()
    {
        $clients = Client::orderBy('name')->get();

        return view('admin.payments.create', compact('clients'));
    }

    public function store(PaymentRequest $request)
    {
        Payment::create($request->validated());

        return redirect()->route('admin.payments.index')->with('success', 'Payment added successfully.');
    }

    public function edit(Payment $payment)
    {
        $clients = Client::orderBy('name')->get();

        return view('admin.payments.edit', compact('payment', 'clients'));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $payment->update($request->validated());

        return redirect()->route('admin.payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('admin.payments.index')->with('success', 'Payment deleted successfully.');
    }

    private function filteredQuery(Request $request): Builder
    {
        $query = Payment::query();

        if ($search = $request->input('search')) {
            $query->where(function (Builder $q) use ($search) {
                $q->where('reference', 'like', "%{$search}%")
                    ->orWhere('notes', 'like', "%{$search}%")
                    ->orWhereHas('client', fn (Builder $c) => $c->where('name', 'like', "%{$search}%"));
            });
        }

        $query->status($request->input('status'));
        $query->method($request->input('method'));

        return $query;
    }
}
