@props(['name', 'class' => 'Column', 'required' => true, 'inputnum'])

<div class="{{ $class }}">
    <x-form.label name='{{ $name }}' />
    @for ($i = 0; $i < $inputnum; $i++)
        <div class="Row">
            <input name="{{ $name . '[]' }}" value="">
            <input name="{{ $name . '[]' }}" value="">
        </div>
    @endfor
    <x-form.error name="{{ $name }}" />
</div>
