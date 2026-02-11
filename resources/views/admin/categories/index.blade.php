@extends('layout')

@section('content')
    <h1 class="PageTitle">Categories</h1>
    @if ($categories->count())
        @error('Category')
            <p>{{ $message }}</p>
        @enderror
        <ul id="PostList">
            @foreach ($categories as $category)
                <li class="Container CategoryCard">
                    <p>{{ $category->name }}</p>
                    <p>{{ $category->slug }}</p>
                    <div>
                        <a href="/admin/categories/{{ $category->id }}" class="Button">Edit</a>
                        <form action="/admin/categories/{{ $category->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-form.delete-button />
                        </form>
                    </div>
                </li>
            @endforeach
            <button class="Container AddCategory">
                <a href="/admin/categories/create">New Category</a>
            </button>
        </ul>
    @endif
@endsection
