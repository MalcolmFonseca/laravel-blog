@extends('layout')

@section('content')
    <h1 class="PageTitle">Manage Posts</h1>
    <ul>
        @if ($posts->count())
            <ul id="PostList">
                @foreach ($posts as $post)
                    <li class="Container">
                        <p>{{ $post->title }}</p>
                        <a href="/admin/posts/{{ $post->id }}">Edit</a>
                        <form action="/admin/posts/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            {{ $posts->links() }}
        @else
            <p>No posts yet...</p>
        @endif
    </ul>
@endsection
