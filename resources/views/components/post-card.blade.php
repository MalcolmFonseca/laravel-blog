@props(['post'])

<li class="Post">
    <h2 class="PostTitle"><a href="/posts/<?= $post->slug ?>"><?= $post->title ?></a></h2>
    By: <a href="/users/<?= $post->user->username ?>"><?= $post->user->name ?></a>
    in <a href="/categories/<?= $post->category->slug ?>"><?= $post->category->name ?></a>
    <div><?= $post->created_at->diffForHumans() ?></div>
    <div><?= $post->excerpt ?></div>
</li>
