<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:2000'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'rating' => ['nullable', 'integer', 'between:1,5'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_visible' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'client_name.required' => 'Please enter the client name.',
            'client_name.max' => 'Client name must not exceed 255 characters.',
            'company.max' => 'Company must not exceed 255 characters.',
            'role.max' => 'Role must not exceed 255 characters.',
            'content.required' => 'Please enter the testimonial text.',
            'content.max' => 'Testimonial must not exceed 2000 characters.',
            'avatar.image' => 'Please upload a valid image file.',
            'avatar.max' => 'Avatar must not exceed 2MB.',
            'rating.between' => 'Rating must be between 1 and 5.',
        ];
    }
}
