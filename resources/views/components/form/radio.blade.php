@props([
    'name',
    'label' => null,
    'value' => null,
    'checked' => false,
    'fieldClass' => null,
])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<label {{ $attributes->class(['form-check', $fieldClass]) }}>
    <input
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        @checked($checked)
        @class(['form-radio', 'is-invalid' => $errors->has($errorKey)])
    >
    @if ($label !== null || ! $slot->isEmpty())
        <span class="form-check-label">{!! $label !!}{{ $slot }}</span>
    @endif
</label>
