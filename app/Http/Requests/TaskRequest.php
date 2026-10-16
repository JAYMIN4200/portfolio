<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'in:'.implode(',', Task::CATEGORIES)],
            'description' => ['nullable', 'string', 'max:5000'],
            'priority' => ['required', 'in:'.implode(',', array_keys(Task::PRIORITIES))],
            'status' => ['required', 'in:'.implode(',', array_keys(Task::STATUSES))],
            'due_date' => ['nullable', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a task name.',
            'title.max' => 'Task name must not exceed 255 characters.',
            'category.in' => 'Please choose a valid category.',
            'description.max' => 'Description must not exceed 5000 characters.',
            'priority.required' => 'Please choose a priority.',
            'priority.in' => 'Please choose a valid priority.',
            'status.required' => 'Please choose a status.',
            'status.in' => 'Please choose a valid status.',
            'due_date.date' => 'Please enter a valid due date.',
        ];
    }
}
