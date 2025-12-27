@props(['name', 'type' => 'text', 'class' => 'Column'])

<div class="{{ $class }}">
    <x-form.label name='{{ $name }}' />
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" required
        value="{{ old($name) }}">
    <x-form.error name="{{ $name }}" />
</div>
