<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\User;


class EditController extends Controller
{
    public function __invoke(User $user) {
        
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));

    }
}
