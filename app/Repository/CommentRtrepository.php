<?php


namespace App\Repository;

use App\Comment;
use App\Post;


class CommentRtrepository
{
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
