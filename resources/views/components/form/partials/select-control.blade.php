<select
    name="{{ $name }}"
    id="{{ $id }}"
    @required($required)
    {{ $attributes->class($controlClass) }}
>
    @if ($placeholder !== null)
        <option value="">{{ $placeholder }}</option>
    @endif
    @if ($options)
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" @selected((string) $current === (string) $optionValue)>{{ $optionLabel }}</option>
        @endforeach
    @endif
    {{ $slot }}
</select>
