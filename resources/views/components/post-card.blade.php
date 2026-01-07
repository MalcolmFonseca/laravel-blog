@props(['post'])

<li class="Post Container">
    @if ($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="600" height="400" />
    @else
        <img src="https://placehold.net/600x400.png" width="600" height="400" />
    @endif
    <div class="PostTitle">
        <h2><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
    </div>
    <div class="PostInfo">
        <p><a href="/blog/?user=<?= $post->user->username ?>"><?= 'By: ' . $post->user->name ?></a></p>
        <p><a href="/blog/?category=<?= $post->category->slug ?>"><?= ucfirst($post->category->name) ?></a></p>
        <p><?= $post->created_at->diffForHumans() ?></p>
    </div>
    <div><?= $post->excerpt ?></div>
    @if (request()->user()?->can('admin'))
        <div class="AdminTools">
            <a href="/admin/posts/{{ $post->id }}" class="DarkContainer">Edit</a>
            <form action="/admin/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="DarkContainer">Delete</button>
            </form>
        </div>
    @endif
</li>
