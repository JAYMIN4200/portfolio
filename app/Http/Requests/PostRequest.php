<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('posts', 'slug')->ignore($this->route('post'))],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:4096'],
            'is_published' => ['boolean'],
            'published_at' => ['nullable', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter the post title.',
            'title.max' => 'Post title must not exceed 255 characters.',
            'slug.required' => 'Please enter the slug.',
            'slug.max' => 'Slug must not exceed 255 characters.',
            'slug.unique' => 'This slug is already in use. Please choose another one.',
            'excerpt.max' => 'Excerpt must not exceed 500 characters.',
            'content.required' => 'Please enter the post content.',
            'image.image' => 'Please upload a valid image file.',
            'image.max' => 'Post image must not exceed 4MB.',
            'published_at.date' => 'Please enter a valid date.',
        ];
    }
}
