<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(Request $request,$post)
    {
        $comment=new Comment();
        $comment->comm_content=$request->comment;
        $comment->author_id=Auth::id();
        $comment->post_id=$post->id;
        $comment->save();

        return back()->with('Okay, alright');
    }
}
