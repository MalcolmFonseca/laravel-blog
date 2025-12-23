@props(['comment'])

<article class="Comment Container">
    <div>
        <img src="https://i.pravatar.cc/50" alt="">
    </div>
    <div>
        <header>
            <h3 class="CommentAuthor">{{ $comment->user->username }}</h3>
            <p class="CommentTime">Posted <time>{{ $comment->created_at->diffForHumans() }}</time></p>
        </header>
        <p class="CommentContents">{{ $comment->body }}</p>
    </div>
</article>
