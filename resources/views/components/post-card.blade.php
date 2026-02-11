@props(['post'])

<li class="PostCard Container">
    @if ($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="600" height="400" />
    @else
        <img src="https://placehold.net/600x400.png" width="600" height="400" />
    @endif
    <div class="PostInfo">
        <a class="PostCategory"
            href="/blog/?category=<?= $post->category->slug ?>"><?= strtoupper($post->category->name) ?></a>
        <h2 class="PostTitle"><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
        <div class="PostExcerpt"><?= $post->excerpt ?></div>
        <hr>
        <div class="PostInfoFooter">
            <p class="PostAuthor"><a
                    href="/blog/?user=<?= $post->user->username ?>"><?= 'By: ' . $post->user->name ?></a></p>
            <p class="PostTimestamp"><?= $post->created_at->diffForHumans() ?></p>
        </div>
    </div>
    @if (request()->user()?->can('admin'))
        <div class="AdminTools">
            <a href="/admin/posts/{{ $post->id }}" class="Button">Edit</a>
            <form action="/admin/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <x-form.delete-button />
            </form>
        </div>
    @endif
</li>
