<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use App\Http\Requests\Post\Comment\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(Post $post)
     {
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
