@extends('layout')

@section('content')
    <div>
        <h1><?= $post->title ?></h1>
        <p><?= $post->body ?></p>
    </div>
    <a href="/blog">Go Back</a>
@endsection