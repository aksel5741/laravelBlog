<?php

namespace App\Http\Controllers;

use App\Facades\PostManager;
use Illuminate\Http\Request;
use App\Post as Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.create.posts-create');
    }

    public function show()
    {
        return view('posts.filter.all-posts',['posts'=>PostManager::getAllPosts()]);
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

    public function post($post)
    {

        return view('posts.post',['post'=>$post]);
    }
}
