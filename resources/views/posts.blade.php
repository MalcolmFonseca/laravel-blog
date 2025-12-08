@extends('layout')

@section('content')

@foreach ($posts as $post)
<a href="/posts/<?= $post->slug; ?>"><?= $post->title; ?></a>
<div><?= $post->excerpt ?></div>
@endforeach

@endsection