<?php


namespace App\Contracts\PostRepositoryInterface;


interface PostRepositoryInterface
{
    public function getPostById($id);

    public function getAllPosts();

    public function getUsersPosts($user_id);

    public function getUnansweredPosts();

    public function createPost($title,$category,$post_content,$categories);
}