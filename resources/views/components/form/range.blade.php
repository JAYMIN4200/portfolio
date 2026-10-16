@props([
    'name',
    'label' => null,
    'value' => null,
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'suffix' => '%',
    'required' => false,
    'hint' => null,
    'fieldClass' => null,
])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
    $value = old($errorKey, $value ?? $min);
@endphp

<x-form.field :name="$errorKey" :label="$label" :required="$required" :hint="$hint" :field-class="$fieldClass">
    <div class="form-range-row">
        <input
            type="range"
            name="{{ $name }}"
            min="{{ $min }}"
            max="{{ $max }}"
            step="{{ $step }}"
            value="{{ $value }}"
            @required($required)
            {{ $attributes->class('form-range') }}
            oninput="this.closest('.form-range-row').querySelector('[data-range-value]').textContent = this.value + '{{ $suffix }}'"
        >
        <span class="form-range-value" data-range-value>{{ $value }}{{ $suffix }}</span>
    </div>
</x-form.field>
