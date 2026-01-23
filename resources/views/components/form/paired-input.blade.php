@props(['name', 'class' => 'Column', 'required' => true, 'inputNum' => 1, 'data' => null])

@php
    if ($data) {
        $inputNum = sizeof($data);
    }

    $dataString = json_encode($data);
@endphp

<div class="{{ $class }}" x-data="{ inputNum: {{ $inputNum }}, data: {{ $dataString }}, add() { this.inputNum += 1 }, remove() { this.inputNum = this.inputNum - 1 }, }">
    <x-form.label name='{{ $name }}' />
    <template x-for="input in inputNum">
        <div class="Row">
            <input name="{{ $name . '[]' }}" :value="data[input - 1]['name']">
            <input name="{{ $name . '[]' }}" :value="data[input - 1]['ref']">
        </div>
    </template>
    <div class="Row">
        <button class="SubmitButton" type="button" @click="add">+</button>
        <button class="SubmitButton" type="button" @click="remove">-</button>
    </div>
    <x-form.error name="{{ $name }}" />
</div>
