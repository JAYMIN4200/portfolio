<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:3000'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_visible' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'question.required' => 'Please enter the question.',
            'question.max' => 'Question must not exceed 255 characters.',
            'answer.required' => 'Please enter the answer.',
            'answer.max' => 'Answer must not exceed 3000 characters.',
        ];
    }
}
