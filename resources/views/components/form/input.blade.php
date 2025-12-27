@props(['name', 'class' => 'Column'])

<div class="{{ $class }}">
    <x-form.label name='{{ $name }}' />
    <input name="{{ $name }}" id="{{ $name }}" required {{ $attributes(['value' => old($name)]) }} />
    <x-form.error name="{{ $name }}" />
</div>
