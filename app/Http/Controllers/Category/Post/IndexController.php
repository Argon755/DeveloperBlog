<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class IndexController extends Controller
{
    public function __invoke(Category $category)
     {
        $posts = $category->posts()->paginate(6);
        return view('category.post.index', compact('posts')); 

    }
}
