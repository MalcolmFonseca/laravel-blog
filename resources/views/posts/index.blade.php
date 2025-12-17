@extends('layout')

@section('content')
    <div id="BlogTitleBar">
        <p id="SubscribeButton">Subscribe for Updates</p>
        <h1 id="PageTitle">My Blog</h1>
        <div id="PostFilters">
            <form method="GET" action="#" id="PostSearch">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"></input>
                @endif
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" />
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
