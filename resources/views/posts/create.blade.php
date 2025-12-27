@extends('layout')

@section('content')
    <h1 class="PageTitle">Create New Post</h1>
    <form action="/admin/posts" method="post" id='Form' class="Container" enctype="multipart/form-data">
        @csrf
        <div class="Row">
            <x-form.input name='title' />
            <x-form.input name='excerpt' />
        </div>

        <div id="CreatePostBody">
            <x-form.textarea name='body' rows="15" />
        </div>

        <div class="Row">
            <div class="Column">
                <x-form.label name="category" />
                <select name="category_id" id="category">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </div>
            <x-form.input name='slug' />
        </div>

        <x-form.input name='thumbnail' type='file' />

        <button type="submit" class="SubmitButton">Publish</button>
    </form>
@endsection
