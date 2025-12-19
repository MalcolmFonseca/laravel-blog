@extends('layout')

@section('content')
    <div>
        <h1><?= $post->title ?></h1>
        <h2>By <?= $post->user->name ?> in <?= $post->category->name ?></h2>
        <p><?= $post->body ?></p>
    </div>
    <a href="/blog">Go Back</a>
    @foreach ($post->comments as $comment)
        <x-post-comment :comment="$comment" />
    @endforeach
@endsection
