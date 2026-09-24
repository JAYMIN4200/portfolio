<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $project = $this->route('project');
        $uniqueRule = $project ? Rule::unique('projects', 'slug')->ignore($project->id) : Rule::unique('projects', 'slug');

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', $uniqueRule],
            'description' => ['nullable', 'string', 'max:1000'],
            'long_description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:4096'],
            'technologies' => ['nullable', 'array'],
            'technologies.*' => ['string', 'max:100'],
            'live_url' => ['nullable', 'url', 'max:255'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'is_featured' => ['boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter the project title.',
            'title.max' => 'Project title must not exceed 255 characters.',
            'slug.max' => 'Slug must not exceed 255 characters.',
            'slug.unique' => 'This slug is already in use. Please choose another one.',
            'description.max' => 'Description must not exceed 1000 characters.',
            'image.image' => 'Please upload a valid image file.',
            'image.max' => 'Project image must not exceed 4MB.',
            'live_url.url' => 'Please enter a valid URL (e.g. https://example.com).',
            'github_url.url' => 'Please enter a valid GitHub URL.',
            'technologies.*.max' => 'Each technology must not exceed 100 characters.',
        ];
    }
}
