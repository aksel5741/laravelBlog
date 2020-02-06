<?php

namespace App\Http\Controllers;

use App\Contracts\PostRequest;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function profile($user,PostRequest $postRequest)
    {
        return view('user.profile',['user'=>$user,'posts'=>$postRequest->getUsersPosts($user->id)]);
    }
    public function updateAvatar(UserRepository $User){
        $User->changeAvatar();

        return back()
            ->with('success','You have successfully upload image.');
    }
}
