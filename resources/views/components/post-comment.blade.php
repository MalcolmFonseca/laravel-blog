@props(['comment'])

<article class="Comment Container">
    <x-profile-image image="{{ $comment->user->profile_image }}" name="{{ $comment->user->name }}" />
    <div>
        <header>
            <h3 class="CommentAuthor">{{ $comment->user->username }}</h3>
            <p class="CommentTime"><time>{{ $comment->created_at->diffForHumans() }}</time></p>
            @if (request()->user()?->can('admin') or request()->user()?->id == $comment->user->id)
                <form action="{{ Request::getPathInfo() . '/comments/' . $comment->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="">🗑️</button>
                </form>
            @endif
        </header>
        <p class="CommentContents">{{ $comment->body }}</p>
    </div>
</article>
