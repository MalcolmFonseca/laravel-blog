@extends('layout')

@section('content')
    <h1 class="PageTitle">Create New Post</h1>
    <form action="/admin/posts" method="post" id='Form' class="Container" enctype="multipart/form-data">
        @csrf
        <div class="Row">
            <div class="Column">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}">
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="Column">
                <label for="excerpt">Excerpt</label>
                <input type="text" name="excerpt" id="excerpt" required value="{{ old('excerpt') }}" />
                @error('excerpt')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div id="CreatePostBody">
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" required value="{{ old('body') }}" rows="15">
            </textarea>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="Row">
            <div class="Column">
                <label for="category_id">Category</label>

                <select name="category_id" id="category">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="Column">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" required value="{{ old('slug') }}">
                @error('slug')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>

        <label for="thumbnail">Thumbnail</label>
        <input type="file" name="thumbnail" id="thumbnail" required value="{{ old('thumbnail') }}" />
        @error('thumbnail')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit" class="SubmitButton">Publish</button>
    </form>
@endsection
