@props([
    'name',
    'type' => 'text',
    'label' => null,
    'value' => null,
    'required' => false,
    'hint' => null,
    'id' => null,
    'size' => null,
    'bare' => false,
    'fieldClass' => null,
])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
    $id ??= str()->slug(str_replace(['[', ']', '.'], '-', $name));
    $value = old($errorKey, $value);

    $controlClass = ['form-input'];
    if ($size === 'sm') {
        $controlClass[] = 'form-input-sm';
    }
    if ($errors->has($errorKey)) {
        $controlClass[] = 'is-invalid';
    }
@endphp

@if ($bare)
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        @required($required)
        {{ $attributes->class($controlClass) }}
    >
@else
    <x-form.field :name="$errorKey" :label="$label" :for="$id" :required="$required" :hint="$hint" :field-class="$fieldClass">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            value="{{ $value }}"
            @required($required)
            {{ $attributes->class($controlClass) }}
        >
    </x-form.field>
@endif
