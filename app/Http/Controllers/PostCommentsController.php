<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request()->body
        ]);

        return back();
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Comment Deleted!');
    }
}
