@props([
    'name' => null,
    'label' => null,
    'for' => null,
    'required' => false,
    'hint' => null,
    'fieldClass' => null,
])

<div {{ $attributes->class(['form-field', $fieldClass]) }}>
    @if ($label !== null)
        <label @if ($for) for="{{ $for }}" @endif class="form-label">{!! $label !!}@if ($required)<span class="form-required" aria-hidden="true">*</span>@endif</label>
    @endif

    {{ $slot }}

    @if ($hint)
        <p class="form-hint">{!! $hint !!}</p>
    @endif

    @if ($name)
        @error($name)
            <p class="form-error">{{ $message }}</p>
        @enderror
    @endif
</div>
