@extends('layout')

@section('content')
<h1 id="PageTitle">Projects</h1>
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