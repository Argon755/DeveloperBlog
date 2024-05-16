<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Post;


class ShowController extends BaseController
{
    public function __invoke(Post $post) {
        
       
        return view('admin.post.show', compact('post'));

    }
}
