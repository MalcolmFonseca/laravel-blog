@extends('layout')

@section('content')
    <x-back-button />
    <h1 class="PageTitle">Edit Category</h1>
    <form action="/admin/categories/{{ $category->id }}" method="POST" id='Form' class="Container">
        @csrf
        @method('PATCH')

        <div class="Row">
            <x-form.input name='name' :value="old('name', $category->name)" />
            <x-form.input name='slug' :value="old('slug', $category->slug)" />
        </div>
        <button type="submit" class="SubmitButton">Update</button>
    </form>
@endsection
