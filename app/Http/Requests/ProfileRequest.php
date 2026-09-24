<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->user()->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', "unique:users,email,{$userId}"],
            'title' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:2000'],
            'avatar' => ['nullable', 'image', 'max:15360'],
            'about_image' => ['nullable', 'image', 'max:15360'],
            'home_about_image' => ['nullable', 'image', 'max:15360'],
            'resume' => ['nullable', 'file', 'mimes:pdf', 'max:15360'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9]{6,15}$/'],
            'whatsapp' => ['nullable', 'string', 'max:20', 'regex:/^\+?[0-9]{6,15}$/'],
            'telegram' => ['nullable', 'url', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'github' => ['nullable', 'url', 'max:255'],
            'linkedin' => ['nullable', 'url', 'max:255'],
            'twitter' => ['nullable', 'url', 'max:255'],
            'instagram' => ['nullable', 'url', 'max:255'],
            'facebook' => ['nullable', 'url', 'max:255'],
            'website' => ['nullable', 'url', 'max:255'],
            'brand_font' => ['nullable', 'string', 'max:100', 'in:poppins,dancing-script,great-vibes,pacifico,allura,parisienne,satisfy,lobster,caveat,playball'],
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
            'email.unique' => 'This email is already in use. Please choose another one.',
            'title.max' => 'Title must not exceed 255 characters.',
            'bio.max' => 'Bio must not exceed 2000 characters.',
            'avatar.image' => 'Please upload a valid image file.',
            'about_image.image' => 'Please upload a valid image file.',
            'home_about_image.image' => 'Please upload a valid image file.',
            'resume.mimes' => 'Please upload a valid PDF file.',
            'phone.max' => 'Phone must not exceed 20 characters.',
            'phone.regex' => 'Please enter a valid phone number. Only digits are allowed, with an optional country code (e.g. +91).',
            'whatsapp.max' => 'WhatsApp number must not exceed 20 characters.',
            'whatsapp.regex' => 'Please enter a valid WhatsApp number. Only digits are allowed, with an optional country code (e.g. +91).',
            'telegram.url' => 'Please enter a valid Telegram URL.',
            'location.max' => 'Location must not exceed 255 characters.',
            'github.url' => 'Please enter a valid GitHub URL.',
            'linkedin.url' => 'Please enter a valid LinkedIn URL.',
            'twitter.url' => 'Please enter a valid Twitter URL.',
            'instagram.url' => 'Please enter a valid Instagram URL.',
            'facebook.url' => 'Please enter a valid Facebook URL.',
            'website.url' => 'Please enter a valid website URL.',
            'brand_font.in' => 'Please select a valid font.',
        ];
    }
}
