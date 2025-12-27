@extends('layout')

@section('content')
    <h1 class="PageTitle">{{ $post->title }}</h1>
    <form action="/admin/posts/{{ $post->id }}" method="POST" id='Form' class="Container"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="Row">
            <x-form.input name='title' :value="old('title', $post->title)" />
            <x-form.input name='excerpt' :value="old('title', $post->excerpt)" />
        </div>

        <div id="CreatePostBody">
            <x-form.textarea name='body' rows="15">{{ old('body', $post->body) }}</x-form.textarea>
        </div>

        <div class="Row">
            <div class="Column">
                <x-form.label name="category" />
                <select name="category_id" id="category">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </div>
            <x-form.input name='slug' :value="old('slug', $post->slug)" />
        </div>

        <div class="Row">
            <x-form.input name='thumbnail' type='file' />
            <div class="Column">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="current thumbnail" height="100">
            </div>
        </div>
        <button type="submit" class="SubmitButton">Update</button>
    </form>
@endsection
