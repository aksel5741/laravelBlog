<?php

namespace App\Http\Controllers;

use App\Facades\PostManager;
use App\Facades\UserManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function profile($user)
    {
        return view('user.profile',['id',$user->id,'user'=>$user,'posts'=>PostManager::getUsersPosts($user->id)]);
    }

    public function updateAvatar(){

        return back()
            ->with('success','You have successfully upload image.');
    }
}
