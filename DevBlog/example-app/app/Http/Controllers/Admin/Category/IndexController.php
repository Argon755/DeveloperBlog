<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Category;


class IndexController extends Controller
{
    public function __invoke() {
        
        $categories = Category::all();
        return view('admin.category.index', compact('categories')); //может быть пометя в компакте на category

    }
}
