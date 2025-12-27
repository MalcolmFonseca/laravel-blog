@props(['name'])

<x-form.label name='{{ $name }}' />
<textarea type="text" name="{{ $name }}" id="{{ $name }}" required {{ $attributes }}>{{ $slot ?? old($name) }}</textarea>
<x-form.error name="{{ $name }}" />
