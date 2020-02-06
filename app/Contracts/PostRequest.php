<?php


namespace App\Contracts;


use App\Post;

interface PostRequest
{
    public function getPostById($id);

    public function getAllPosts();

    public function getUsersPosts($user_id);

    public function getUnansweredPosts();

    public function createPost();
}
