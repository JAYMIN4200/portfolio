@php
    $clientOptions = $clients->pluck('name', 'id')->all();
    $methodOptions = App\Models\Payment::METHODS;
    $statusOptions = App\Models\Payment::STATUSES;
@endphp

<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
    <div class="space-y-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-form.select name="client_id" label="Client" :options="$clientOptions" placeholder="No client" :value="$payment->client_id ?? ''" />
            <x-form.input type="number" step="0.01" min="0.01" name="amount" label="Amount" required placeholder="0.00" :value="$payment->amount" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <x-form.input type="date" name="payment_date" label="Payment Date" required :value="$payment->payment_date?->format('Y-m-d') ?? date('Y-m-d')" />
            <x-form.select name="method" label="Method" :options="$methodOptions" placeholder="Select method" :value="$payment->method" />
            <x-form.select name="status" label="Status" :options="$statusOptions" required :value="$payment->status ?? 'received'" />
        </div>

        <x-form.input name="reference" label="Reference" placeholder="e.g. Invoice #1024 / TXN ID" :value="$payment->reference" />

        <x-form.textarea name="notes" label="Notes" :rows="3" placeholder="Optional notes..." :value="$payment->notes" />
    </div>
</div>
