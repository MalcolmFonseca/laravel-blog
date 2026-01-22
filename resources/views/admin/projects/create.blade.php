@extends('layout')

@section('content')
    <h1 class="PageTitle">Create New Project</h1>
    <form action="/admin/projects" method="POST" id='Form' class="Container" enctype="multipart/form-data">
        @csrf
        <div class="Row">
            <x-form.input name='title' />
            <x-form.input name='slug' />
        </div>

        <div class="FormTextArea">
            <x-form.textarea name='body' rows="15" />
        </div>

        <div class="Row">
            <x-form.input name='technologies' />
            <x-form.input name='thumbnail' type='file' />
        </div>

        <div class="Row">
            <x-form.paired-input name='links' />
        </div>


        <button type="submit" class="SubmitButton">Publish</button>
    </form>
@endsection
