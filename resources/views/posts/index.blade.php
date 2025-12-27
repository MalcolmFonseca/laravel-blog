@extends('layout')

@section('content')
    <h1 class="PageTitle">My Blog</h1>
    <div id="BlogTitleBar">
        <p id="SubscribeButton" class="Container"><a href="#newsletter">Subscribe for Updates</a></p>
        <p class="Container"><a href="/admin/posts/create">New Post</a></p>
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
    <form id="newsletter" class="Container" action="/newsletter" method="post">
        @csrf
        <h2>Subscribe to be notified of new posts</h2>
        <x-form.input name='email' type='email' class='' />
        <button type="submit" class="SubmitButton">Subscribe</button>
    </form>

@endsection
