@props(['name', 'class' => 'Column', 'required' => true])

<div class="{{ $class }}">
    <x-form.label name='{{ $name }}' />
    <input name="{{ $name }}" id="{{ $name }}" @required($required == 'true')
        {{ $attributes(['value' => old($name)]) }} />
    <x-form.error name="{{ $name }}" />
</div>
