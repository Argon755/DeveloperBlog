<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\User;
use App\Jobs\StoreUserJob;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {


        $data = $request->validated();
       
       StoreUserJob::dispatch($data);

        return redirect()->route('admin.user.index');

    }
}
