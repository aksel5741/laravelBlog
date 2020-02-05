<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function index()
    {
        return view('posts.create.posts_create');
    }

    public function show()
    {
        $posts=Post::all();
        $user = Auth::user();
        return view('posts.filter.all-posts', compact('user',$user,'posts',$posts));
    }

    public function create(Request $request)
    {
        $post=new Post;
        $post->title = $request->title;
        $post->category=$request->category;
        $post->post_content=$request->post_content;
        $post->author_id=Auth::id();
        $post->save();

         return back()
             ->with('success','You have successfully created post.');
    }

}
