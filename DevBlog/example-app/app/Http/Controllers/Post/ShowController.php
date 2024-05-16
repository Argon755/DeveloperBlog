<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post) {
        
        
       $date = Carbon::parse($post->created_at);
       
        return view('post.show', compact('post', 'date'));

    }
}
