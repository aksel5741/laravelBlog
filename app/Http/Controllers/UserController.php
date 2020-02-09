<?php

namespace App\Http\Controllers;

use App\Contracts\PostRepositoryInterface\PostRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{

    private $PostRepositoryInterface;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->PostRepositoryInterface=$postRepository;
    }

    public function profile($user)
    {
        return view('user.profile',['id',$user->id,'user'=>$user,'posts'=>$this->PostRepositoryInterface->getUsersPosts($user->id)]);
    }

    public function updateAvatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

       return back()
            ->with('success','You have successfully upload image.');
    }
}
