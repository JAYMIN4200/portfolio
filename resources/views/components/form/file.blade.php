@props([
    'name',
    'label' => null,
    'hint' => null,
    'id' => null,
    'fieldClass' => null,
    'bare' => false,
])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
    $id ??= str()->slug(str_replace(['[', ']', '.'], '-', $name));

    $controlClass = ['form-file'];
    if ($errors->has($errorKey)) {
        $controlClass[] = 'is-invalid';
    }
@endphp

@if ($bare)
    <input type="file" name="{{ $name }}" id="{{ $id }}" {{ $attributes->class($controlClass) }}>
@else
    <x-form.field :name="$errorKey" :label="$label" :for="$id" :hint="$hint" :field-class="$fieldClass">
        <input type="file" name="{{ $name }}" id="{{ $id }}" {{ $attributes->class($controlClass) }}>
    </x-form.field>
@endif
