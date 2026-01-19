@extends('layout')

@section('content')
    <p class="BackButton"><a href="/blog" class="Container">Go Back</a></p>
    <div>
        <div class="Post">
            <div class="Container PostImage">
                @if ($post->thumbnail)
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" />
                @else
                    <img src="https://placehold.net/600x400.png" />
                @endif
            </div>
            <div class="PostHeader">
                <h2 class="PostCategory">{{ strtoupper($post->category->name) }}</h2>
                <h1><?= $post->title ?></h1>
                <h2>By <?= $post->user->name ?></h2>
                <h2><?= $post->created_at->diffForHumans() ?></h2>
                <p><?= $post->excerpt ?></p>
            </div>
        </div>
        <div class="SmallContent">
            <div class="PostBody"> {!! $post->body !!} </div>
        </div>
    </div>
    <div class="CommentSection">
        @auth
            <form action="/posts/{{ $post->slug }}/comments" method="post" class="Comment CreateComment Container">
                @csrf
                <div>
                    <img src="https://i.pravatar.cc/50" alt="">
                    <p>Leave a Comment:</p>
                </div>
                <x-form.textarea name="body" rows="3" />
                <div>
                    <button type="submit">Post</button>
                </div>
            </form>
        @else
            <p class="Comment Container"><a href="/register">Register</a>&nbspor&nbsp<a href="/login">Log in</a>&nbspto
                leave a comment
            </p>
        @endauth
        @foreach ($post->comments as $comment)
            <x-post-comment :comment="$comment" />
        @endforeach
    </div>
@endsection
