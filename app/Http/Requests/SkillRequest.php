<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'proficiency' => ['required', 'integer', 'min:0', 'max:100'],
            'icon' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the skill name.',
            'name.max' => 'Skill name must not exceed 255 characters.',
            'category.required' => 'Please enter the category.',
            'category.max' => 'Category must not exceed 255 characters.',
            'proficiency.required' => 'Please set the proficiency level.',
            'proficiency.integer' => 'Proficiency must be a number.',
            'proficiency.min' => 'Proficiency must be at least 0.',
            'proficiency.max' => 'Proficiency must not exceed 100.',
        ];
    }
}
