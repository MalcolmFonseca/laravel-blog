@props(['post'])

<li class="DarkContainer FeaturedPost">
    <h2 class="PostTitle"><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
    @if ($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="300" height="200" />
    @else
        <img src="https://placehold.net/7-800x600.png" width="300" height="200" />
    @endif
    <div class="PostInfo">
        <p><a href="/blog/?user=<?= $post->user->username ?>"><?= 'By: ' . $post->user->name ?></a></p>
        <p><?= $post->created_at->diffForHumans() ?></p>
        <p><a href="/blog/?category=<?= $post->category->slug ?>"><?= ucfirst($post->category->name) ?></a></p>
    </div>
    <div><?= $post->excerpt ?></div>
</li>
