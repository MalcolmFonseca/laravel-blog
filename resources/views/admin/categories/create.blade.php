@extends('layout')

@section('content')
    <x-back-button />
    <h1 class="PageTitle">Create New Category</h1>
    <form action="/admin/categories" method="POST" id='Form' class="Container">
        @csrf
        <div class="Row">
            <x-form.input name='name' />
            <x-form.input name='slug' />
        </div>
        <button type="submit" class="SubmitButton">Create</button>
    </form>
@endsection
