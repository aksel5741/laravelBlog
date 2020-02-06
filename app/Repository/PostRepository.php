<?php


namespace App\Repository;


use App\Contracts\PostRequest;
use App\Post;

class PostRepository implements PostRequest
{
    public function getPostById($id)
    {
        return Post::findOrFail($id);
    }

    public function getAllPosts()
    {
        return Post::all();
    }

    public function getUsersPosts($user_id)
    {
        return Post::where('author_id',$user_id)->get();
    }

    public function getUnansweredPosts()
    {

    }

    public function createPost()
    {

    }
}
