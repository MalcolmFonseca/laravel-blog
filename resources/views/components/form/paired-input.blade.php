@props(['name', 'class' => 'Column', 'required' => true, 'inputNum' => 1])

<div class="{{ $class }}" x-data="{ inputNum: {{ $inputNum }}, add() { this.inputNum += 1 }, remove() { this.inputNum = this.inputNum - 1 }, }">
    <x-form.label name='{{ $name }}' />
    <template x-for="input in inputNum">
        <div class="Row">
            <input name="{{ $name . '[]' }}">
            <input name="{{ $name . '[]' }}">
        </div>
    </template>
    <div class="Row">
        <button class="SubmitButton" type="button" @click="add">+</button>
        <button class="SubmitButton" type="button" @click="remove">-</button>
    </div>
    <x-form.error name="{{ $name }}" />
</div>
