@extends('layout')

@section('content')
    <h1 class="PageTitle">My Projects</h1>
    <div id="BlogTitleBar">
        @if (request()->user()?->can('admin'))
            <p class="Container"><a href="/admin/posts/create">New Post</a></p>
        @else
            <div></div>
        @endif
        <div id="PostFilters">
            <form method="GET" action="#" id="PostSearch">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"></input>
                @endif
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}"
                    class="Container" />
            </form>
            <div id="PostCategory">
                <x-category-dropdown />
            </div>
        </div>
    </div>
    @if ($posts->count())
        <ul id="PostList">
            @foreach ($posts as $post)
                <x-post-card :post=$post />
            @endforeach
        </ul>
        {{ $posts->links() }}
    @else
        <p>No posts yet...</p>
    @endif
@endsection
