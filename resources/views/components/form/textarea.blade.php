@props([
    'name',
    'label' => null,
    'value' => null,
    'required' => false,
    'hint' => null,
    'id' => null,
    'rows' => 4,
    'resize' => false,
    'fieldClass' => null,
])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
    $id ??= str()->slug(str_replace(['[', ']', '.'], '-', $name));
    $value = old($errorKey, $value);

    $controlClass = ['form-textarea'];
    if (! $resize) {
        $controlClass[] = 'form-textarea-fixed';
    }
    if ($errors->has($errorKey)) {
        $controlClass[] = 'is-invalid';
    }
@endphp

<x-form.field :name="$errorKey" :label="$label" :for="$id" :required="$required" :hint="$hint" :field-class="$fieldClass">
    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        rows="{{ $rows }}"
        @required($required)
        {{ $attributes->class($controlClass) }}
    >{{ $value }}</textarea>
</x-form.field>
