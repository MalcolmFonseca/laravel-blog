@extends('layout')

@section('content')
    <h1 class="PageTitle">Categories</h1>
    @if ($categories->count())
        <ul id="PostList">
            @foreach ($categories as $category)
                <li class="Container">
                    <a href="">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
