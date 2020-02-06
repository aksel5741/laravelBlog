<?php


namespace App\Repository;

 use App\User;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;

 class UserRepository
{
    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

     public function getAllUsers($id)
     {
         return User::all();
     }

    public function changeAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();
    }


}
