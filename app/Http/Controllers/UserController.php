<?php

namespace App\Http\Controllers;

use App\Facades\PostRepository;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function profile($user)
    {
        
        return view('user.profile',['user'=>$user,'posts'=>PostRepository::getUsersPosts($user->id)]);
    }

    public function updateAvatar(UserRepository $User){

        return back()
            ->with('success','You have successfully upload image.');
    }
}
