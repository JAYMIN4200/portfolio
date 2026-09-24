<?php

namespace App\Http\Requests;

use App\Models\Expense;
use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:0.01'],
            'category' => ['required', 'in:'.implode(',', Expense::CATEGORIES)],
            'expense_date' => ['required', 'date'],
            'notes' => ['nullable', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a title for the expense.',
            'title.max' => 'Title must not exceed 255 characters.',
            'amount.required' => 'Please enter the expense amount.',
            'amount.numeric' => 'Amount must be a number.',
            'amount.min' => 'Amount must be greater than zero.',
            'category.required' => 'Please choose a category.',
            'category.in' => 'Please choose a valid category.',
            'expense_date.required' => 'Please pick the expense date.',
            'expense_date.date' => 'Please enter a valid date.',
            'notes.max' => 'Notes must not exceed 3000 characters.',
        ];
    }
}