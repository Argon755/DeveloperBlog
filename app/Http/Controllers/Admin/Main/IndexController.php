<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Tag;
use App\Category;
use App\Post;

class IndexController extends Controller
{
    public function __invoke() {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['tagsCount'] = Tag::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
