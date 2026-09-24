<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9]{6,15}$/'],
            'project_type' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:'.implode(',', Client::STATUSES)],
            'notes' => ['nullable', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the client name.',
            'name.max' => 'Name must not exceed 255 characters.',
            'company.max' => 'Company must not exceed 255 characters.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email must not exceed 255 characters.',
            'phone.max' => 'Phone must not exceed 20 characters.',
            'phone.regex' => 'Please enter a valid phone number. Only digits are allowed, with an optional country code (e.g. +91).',
            'project_type.max' => 'Project type must not exceed 255 characters.',
            'status.required' => 'Please choose a status.',
            'status.in' => 'Please choose a valid status.',
            'notes.max' => 'Notes must not exceed 3000 characters.',
        ];
    }
}