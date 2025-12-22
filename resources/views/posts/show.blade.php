@extends('layout')

@section('content')
    <p class="BackButton"><a href="/blog">Go Back</a></p>
    <div>
        <h1 class="PageTitle"><?= $post->title ?></h1>
        <h2 class="PageSubtitle">By <?= $post->user->name ?> in <?= $post->category->name ?></h2>
        <p class="PostBody"><?= $post->body ?></p>
    </div>
    <div>
        @auth
            <form action="/posts/{{ $post->slug }}/comments" method="post" class="Comment CreateComment">
                @csrf
                <div>
                    <img src="https://i.pravatar.cc/50" alt="">
                    <p>Leave a Comment:</p>
                </div>
                <div>
                    <textarea name="body" cols="30" rows="3" placeholder="" required></textarea>
                    @error('body')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit">Post</button>
                </div>
            </form>
        @else
            <p class="Comment"><a href="/register">Register</a>&nbspor&nbsp<a href="/login">Log in</a>&nbspto
                leave a comment
            </p>
        @endauth
        @foreach ($post->comments as $comment)
            <x-post-comment :comment="$comment" />
        @endforeach
    </div>
@endsection
