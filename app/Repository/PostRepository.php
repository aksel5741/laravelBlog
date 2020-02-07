<?php


namespace App\Repository;


use App\Facades\PostManager;
use App\Post;
use Mockery\Generator\StringManipulation\Pass\ClassNamePass;

class PostRepository
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
