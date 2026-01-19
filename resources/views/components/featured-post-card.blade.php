@props(['post'])

<li class="DarkContainer FeaturedPost">
    @if ($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="300" height="200" />
    @else
        <img src="https://placehold.net/7-800x600.png" width="300" height="200" />
    @endif
    <div class="FeaturedPostInfo">
        <p class="PostCategory"><a
                href="/blog/?category=<?= $post->category->slug ?>"><?= strtoupper($post->category->name) ?></a></p>
        <h2 class="PostTitle"><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
        <p><?= $post->excerpt ?></p>
        <hr>
        <div class="PostInfoFooter">
            <p><a href="/blog/?user=<?= $post->user->username ?>"><?= 'By: ' . $post->user->name ?></a></p>
            <p><?= $post->created_at->diffForHumans() ?></p>
        </div>
    </div>
</li>
