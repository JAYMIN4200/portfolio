<?php

namespace App\Http\Requests;

use App\Models\Meeting;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MeetingRequest extends FormRequest
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
            'meeting_date' => ['required', 'date', 'after_or_equal:today'],
            'meeting_time' => ['required', 'date_format:H:i'],
            'duration' => ['nullable', 'integer', 'min:15', 'max:480'],
            'topic' => ['nullable', Rule::in([...Meeting::TOPICS, Meeting::TOPIC_OTHER])],
            'topic_other' => ['nullable', 'string', 'max:255', 'required_if:topic,'.Meeting::TOPIC_OTHER],
            'notes' => ['nullable', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.max' => 'Name must not exceed 255 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email must not exceed 255 characters.',
            'phone.max' => 'Phone must not exceed 20 characters.',
            'phone.regex' => 'Please enter a valid phone number. Only digits are allowed, with an optional country code (e.g. +91).',
            'company.max' => 'Company must not exceed 255 characters.',
            'meeting_date.required' => 'Please choose a meeting date.',
            'meeting_date.date' => 'Please enter a valid date.',
            'meeting_date.after_or_equal' => 'Meeting date must not be in the past.',
            'meeting_time.required' => 'Please choose a meeting time.',
            'meeting_time.date_format' => 'Please enter a valid time.',
            'duration.integer' => 'Please choose a valid duration.',
            'duration.min' => 'Duration must be at least 15 minutes.',
            'duration.max' => 'Duration must not exceed 480 minutes.',
            'topic.in' => 'Please choose a valid topic.',
            'topic_other.required_if' => 'Please tell us your topic.',
            'topic_other.max' => 'Topic must not exceed 255 characters.',
            'notes.max' => 'Notes must not exceed 3000 characters.',
        ];
    }
}