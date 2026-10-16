@props([
    'name',
    'label' => null,
    'options' => null,
    'value' => null,
    'placeholder' => null,
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
    $current = old($errorKey, $value);

    $controlClass = ['form-select'];
    if ($size === 'sm') {
        $controlClass[] = 'form-select-sm';
    }
    if ($errors->has($errorKey)) {
        $controlClass[] = 'is-invalid';
    }
@endphp

@if ($bare)
    @include('components.form.partials.select-control')
@else
    <x-form.field :name="$errorKey" :label="$label" :for="$id" :required="$required" :hint="$hint" :field-class="$fieldClass">
        @include('components.form.partials.select-control')
    </x-form.field>
@endif
