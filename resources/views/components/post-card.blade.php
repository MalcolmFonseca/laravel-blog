@props(['post'])

<li class="Post">
    <h2 class="PostTitle"><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
    By: <a href="/blog/?user=<?= $post->user->username ?>"><?= $post->user->name ?></a>
    in <a href="/blog/?category=<?= $post->category->slug ?>"><?= $post->category->name ?></a>
    <div><?= $post->created_at->diffForHumans() ?></div>
    <div><?= $post->excerpt ?></div>
</li>
