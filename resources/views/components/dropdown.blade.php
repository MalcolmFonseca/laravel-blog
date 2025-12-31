@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    <button @click="show = !show" class="Container" type="button">{{ $trigger }}</button>
    <div x-show="show" class="Dropdown">
        {{ $slot }}
    </div>
</div>
