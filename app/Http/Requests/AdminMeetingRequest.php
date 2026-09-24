<?php

namespace App\Http\Requests;

use App\Models\Meeting;
use Illuminate\Foundation\Http\FormRequest;

class AdminMeetingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9]{6,15}$/'],
            'company' => ['nullable', 'string', 'max:255'],
            'meeting_date' => ['required', 'date'],
            'meeting_time' => ['nullable', 'date_format:H:i'],
            'duration' => ['nullable', 'integer', 'min:5', 'max:480'],
            'topic' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string', 'max:3000'],
            'status' => ['required', 'in:'.implode(',', Meeting::STATUSES)],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the contact name.',
            'name.max' => 'Name must not exceed 255 characters.',
            'email.required' => 'Please enter the email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.max' => 'Phone must not exceed 20 characters.',
            'phone.regex' => 'Please enter a valid phone number. Only digits are allowed, with an optional country code (e.g. +91).',
            'company.max' => 'Company must not exceed 255 characters.',
            'meeting_date.required' => 'Please choose a meeting date.',
            'meeting_date.date' => 'Please enter a valid date.',
            'meeting_time.date_format' => 'Please enter a valid time.',
            'duration.integer' => 'Duration must be a number.',
            'duration.min' => 'Duration must be at least 5 minutes.',
            'duration.max' => 'Duration must not exceed 480 minutes.',
            'topic.max' => 'Topic must not exceed 255 characters.',
            'notes.max' => 'Notes must not exceed 3000 characters.',
            'status.required' => 'Please choose a status.',
            'status.in' => 'Please choose a valid status.',
        ];
    }
}