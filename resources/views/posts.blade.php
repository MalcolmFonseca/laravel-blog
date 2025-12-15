@extends('layout')

@section('content')
<div id="BlogTitleBar">
    <p id="SubscribeButton">Subscribe for Updates</p>
    <h1 id="PageTitle">My Blog</h1>
    <div id="PostFilters">
        <form method="GET" action="#" id="PostSearch">
            <input type="text" name="search" placeholder="Search" />
        </form>
        <div id="PostCategory">
            <x-dropdown>
                <x-slot name="trigger">
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Categories" }}
                </x-slot>
                <a href="/blog">All</a>
                @foreach ($categories as $category)
                <a href="/categories/{{ $category->slug }}">{{ ucwords($category->name) }}</a>
                @endforeach
            </x-dropdown>
        </div>
    </div>
</div>
@if ($posts->count())
<ul id="PostList">
@foreach ($posts as $post)
<x-post-card :post=$post/>
@endforeach
</ul>
@else
<p>No posts yet...</p>
@endif

@endsection