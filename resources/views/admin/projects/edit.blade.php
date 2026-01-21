@extends('layout')

@section('content')
    <div>
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
                <x-form.input name='thumbnail' type='file' required='false' />
            </div>
            <button type="submit" class="SubmitButton">Update</button>
        </form>
    </div>
@endsection
