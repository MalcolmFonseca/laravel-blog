@extends('layout')

@section('content')

@foreach ($posts as $post)
<a href="/posts/<?= $post->slug; ?>"><?= $post->title; ?></a>
By: <a href="/users/<?= $post->user->username; ?>"><?= $post->user->name ?></a>
in <a href="/categories/<?= $post->category->slug; ?>"><?= $post->category->name; ?></a>
<div><?= $post->excerpt ?></div>
@endforeach

@endsection