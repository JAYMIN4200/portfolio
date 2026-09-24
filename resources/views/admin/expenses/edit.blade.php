@extends('layouts.admin')
@section('title', 'Edit Expense')
@section('content')

    @php $categories = App\Models\Expense::CATEGORIES; @endphp

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Edit Expense</h1>
    </div>

    <form method="POST" action="{{ route('admin.expenses.update', $expense) }}" class="w-full" data-submitting data-validate data-validate-messages='@json((new \App\Http\Requests\ExpenseRequest)->messages())' data-validate-error-class="text-red-500 text-xs mt-1">
        @csrf @method('PUT')

        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $expense->title) }}" required placeholder="e.g. Domain renewal" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('title') border-red-300 @enderror">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Amount (&#8377;) <span class="text-red-500">*</span></label>
                        <input type="number" name="amount" value="{{ old('amount', $expense->amount) }}" required step="0.01" min="0.01" placeholder="0.00" class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('amount') border-red-300 @enderror">
                        @error('amount') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Category <span class="text-red-500">*</span></label>
                        <select name="category" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('category') border-red-300 @enderror">
                            @foreach ($categories as $category)
                                <option value="{{ $category }}" {{ old('category', $expense->category) === $category ? 'selected' : '' }}>{{ $category }}</option>
                            @endforeach
                        </select>
                        @error('category') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Date <span class="text-red-500">*</span></label>
                        <input type="date" name="expense_date" value="{{ old('expense_date', optional($expense->expense_date)->format('Y-m-d')) }}" required class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-sm text-slate-800 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('expense_date') border-red-300 @enderror">
                        @error('expense_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Notes</label>
                    <textarea name="notes" rows="3" placeholder="Optional details..." class="w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-800 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition-all @error('notes') border-red-300 @enderror">{{ old('notes', $expense->notes) }}</textarea>
                    @error('notes') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-lg bg-indigo-600 text-white font-semibold text-sm hover:bg-indigo-700 transition-colors">
                <span data-submit-label>Update Expense</span>
                <svg data-submit-spinner class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><path class="opacity-30" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </button>
            <a href="{{ route('admin.expenses.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold text-sm hover:bg-slate-50 transition-colors">Cancel</a>
        </div>
    </form>

@endsection