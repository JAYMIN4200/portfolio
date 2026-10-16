@props(['name'])

@error(str_replace(['[', ']'], ['.', ''], $name))
    <p {{ $attributes->class('form-error') }}>{{ $message }}</p>
@enderror
