@props(['name', 'rows'])

<x-form.label name='{{ $name }}' />
<textarea type="text" name="{{ $name }}" id="{{ $name }}" required value="{{ old($name) }}"
    rows="{{ $rows }}">
            </textarea>
<x-form.error name="{{ $name }}" />
