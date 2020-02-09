<?php


namespace App\Contracts\CommentRepositoryInterface;


interface CommentRepositoryInterface
{
    public function getPostComments($post_id);

    public function create($comment,$post_id,$author_id=0);
}