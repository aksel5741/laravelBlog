<?php


namespace App\Repository;

use App\Comment;
use App\Contracts\CommentRepositoryInterface\CommentRepositoryInterface;
use Illuminate\Support\Facades\Auth;


class CommentRtrepository implements CommentRepositoryInterface
{
   private $Comment;

   public function __construct(Comment $comment)
   {
       $this->Comment=$comment;
   }

   public function create($comment, $post_id, $author_id = 0)
   {
       $this->Comment->comm_content=$comment;
       $this->Comment->author_id=Auth::id();
       $this->Comment->post_id=$post_id;
       $this->Comment->save();
   }
}
