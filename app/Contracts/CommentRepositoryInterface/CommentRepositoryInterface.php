<?php


namespace App\Contracts\CommentRepositoryInterface;


interface CommentRepositoryInterface
{
    public function create($comment,$post_id,$author_id=0);
}