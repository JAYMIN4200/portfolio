@php
    $clientOptions = $clients->pluck('name', 'id')->all();
    $methodOptions = App\Models\Payment::METHODS;
    $statusOptions = App\Models\Payment::STATUSES;
@endphp

<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
    <div class="space-y-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Client</label>
                <div class="relative">
                    <select name="client_id" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        <option value="">No client</option>
                        @foreach ($clientOptions as $id => $name)
                            <option value="{{ $id }}" {{ (string) old('client_id', $payment->client_id ?? '') === (string) $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Amount <span class="text-red-500">*</span></label>
                <input type="number" step="0.01" min="0.01" name="amount" value="{{ old('amount', $payment->amount ?? '') }}" required placeholder="0.00"
                       class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Payment Date <span class="text-red-500">*</span></label>
                <input type="date" name="payment_date" value="{{ old('payment_date', isset($payment) && $payment->payment_date ? $payment->payment_date->format('Y-m-d') : date('Y-m-d')) }}" required
                       class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Method</label>
                <div class="relative">
                    <select name="method" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        <option value="">Select method</option>
                        @foreach ($methodOptions as $value => $label)
                            <option value="{{ $value }}" {{ old('method', $payment->method ?? '') === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Status <span class="text-red-500">*</span></label>
                <div class="relative">
                    <select name="status" class="w-full px-3 py-2.5 pr-10 rounded-lg border border-slate-300 text-slate-800 appearance-none bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
                        @foreach ($statusOptions as $value => $label)
                            <option value="{{ $value }}" {{ old('status', $payment->status ?? 'received') === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Reference</label>
            <input type="text" name="reference" value="{{ old('reference', $payment->reference ?? '') }}" placeholder="e.g. Invoice #1024 / TXN ID"
                   class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Notes</label>
            <textarea name="notes" rows="3" placeholder="Optional notes..."
                      class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all resize-none">{{ old('notes', $payment->notes ?? '') }}</textarea>
        </div>
    </div>
</div>
