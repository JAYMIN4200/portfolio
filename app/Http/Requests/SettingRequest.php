<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'settings' => ['required', 'array'],
            'settings.*' => ['nullable', 'string', 'max:2000'],
            'settings.signature_image' => ['nullable', 'image', 'max:2048'],
            'settings.favicon' => ['nullable', 'image', 'max:2048'],
        ];
    }
}
