<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_id' => ['nullable', 'exists:clients,id'],
            'amount' => ['required', 'numeric', 'min:0.01'],
            'payment_date' => ['required', 'date'],
            'method' => ['nullable', 'in:'.implode(',', array_keys(Payment::METHODS))],
            'status' => ['required', 'in:'.implode(',', array_keys(Payment::STATUSES))],
            'reference' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'client_id.exists' => 'Please choose a valid client.',
            'amount.required' => 'Please enter the payment amount.',
            'amount.numeric' => 'Amount must be a number.',
            'amount.min' => 'Amount must be greater than zero.',
            'payment_date.required' => 'Please choose the payment date.',
            'payment_date.date' => 'Please enter a valid date.',
            'method.in' => 'Please choose a valid payment method.',
            'status.required' => 'Please choose a status.',
            'status.in' => 'Please choose a valid status.',
            'reference.max' => 'Reference must not exceed 255 characters.',
            'notes.max' => 'Notes must not exceed 3000 characters.',
        ];
    }
}
