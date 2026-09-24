<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'is_current' => ['boolean'],
            'location' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'url', 'max:255'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'company.required' => 'Please enter the company name.',
            'company.max' => 'Company name must not exceed 255 characters.',
            'position.required' => 'Please enter the position.',
            'position.max' => 'Position must not exceed 255 characters.',
            'description.max' => 'Description must not exceed 2000 characters.',
            'start_date.required' => 'Please select the start date.',
            'start_date.date' => 'Please enter a valid start date.',
            'end_date.date' => 'Please enter a valid end date.',
            'end_date.after_or_equal' => 'End date must be the same as or after the start date.',
            'website.url' => 'Please enter a valid website URL.',
            'logo.image' => 'Please upload a valid image file.',
            'logo.max' => 'Logo must not exceed 2MB.',
        ];
    }
}
