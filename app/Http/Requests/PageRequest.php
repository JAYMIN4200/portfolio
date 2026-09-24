<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('pages', 'slug')->ignore($this->route('page'))],
            'content' => ['required', 'string'],
            'is_published' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter the page title.',
            'title.max' => 'Page title must not exceed 255 characters.',
            'slug.required' => 'Please enter the slug.',
            'slug.max' => 'Slug must not exceed 255 characters.',
            'slug.unique' => 'This slug is already in use. Please choose another one.',
            'content.required' => 'Please enter the page content.',
        ];
    }
}
