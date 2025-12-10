@props(['post'])

<li id="Post">
    <h2><a href="/posts/<?= $post->slug; ?>"><?= $post->title; ?></a></h2>
    By: <a href="/users/<?= $post->user->username; ?>"><?= $post->user->name ?></a>
    in <a href="/categories/<?= $post->category->slug; ?>"><?= $post->category->name; ?></a>
    <div><?= $post->excerpt ?></div>
</li>