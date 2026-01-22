@extends('layout')

@section('content')
    <div>
        <x-back-button />
        <form action="/admin/projects/{{ $project->id }}" method="POST" id='Form' class="Container"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="Row">
                <x-form.input name='title' :value="old('title', $project->title)" />
                <x-form.input name='slug' :value="old('slug', $project->slug)" />
            </div>

            <div class="FormTextArea">
                <x-form.textarea name='body' rows="15">{{ old('body', $project->body) }}</x-form.textarea>
            </div>

            <div class="Row">
                {{-- have to convert here, won't let me inline --}}
                @php
                    $techString = implode(',', $project->technologies);
                @endphp
                <x-form.input name='technologies' :value="old('technologies', $techString)" />
                <x-form.input name='thumbnail' type='file' required='false' />
            </div>

            <div class="Row">
                <x-form.paired-input name='links' />
            </div>


            <button type="submit" class="SubmitButton">Publish</button>
        </form>
    </div>
@endsection
