<?php


namespace App\Repository;


use App\Comment;
use App\Contracts\PostRepositoryInterface\PostRepositoryInterface;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PostRepository implements PostRepositoryInterface
{
    private $Post;

    public function __construct(Post $post)
    {
        $this->Post=$post;
    }

    public function getPostById($id)
    {
        return $this->Post->findOrFail($id);
    }

    public function getAllPosts()
    {
        return $this->Post->paginate(2);
    }

    public function getUsersPosts($user_id)
    {
        return $this->Post->where('author_id',$user_id)->paginate(2);
    }

    public function getUnansweredPosts()
    {
        $posts=$this->Post->doesntHave('comment')->paginate(2);

        return $posts;
    }

    public function createPost($title,$post_content,$categories=null)
    {

        $this->Post->title=$title;
        $this->Post->post_content=$post_content;
        $this->Post->author_id=Auth::id();
        $this->Post->save();
        if($categories!=null){
        $this->Post->categories()->attach($categories);
        }
    }

    public function getMostViewedPosts()
    {
        $posts=$this->Post->orderBy('views','desc')->paginate(2);
        return $posts;
    }

    public function getPostsByCategory($category)
    {
        $posts=$this->Post->categories()->where('name','animal')->get();
        dd($posts);
        return $posts;
    }

    public function updatePost($title,$post_content,$post_id,$categories)
    {
        $oldPost=$this->getPostById($post_id);
        $oldPost->title=$title;
        $oldPost->post_content=$post_content;
        $oldPost->author_id=Auth::id();
        $oldPost->save();
        $oldPost->categories()->detach();
        if($categories!=null){
            $oldPost->categories()->attach($categories);
        }
    }
}
