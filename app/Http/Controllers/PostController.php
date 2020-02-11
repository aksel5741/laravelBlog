<?php

namespace App\Http\Controllers;

use App\Contracts\CategoryRepositoryInterface\CategoryRepositoryInterface;
use App\Contracts\PostRepositoryInterface\PostRepositoryInterface;
use App\Events\ViewPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    private $PostRepositoryInterface;


    private $categoryRepositoryInterface;

    public function __construct(PostRepositoryInterface $postRepository, CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->PostRepositoryInterface=$postRepository;
        $this->categoryRepositoryInterface=$categoryRepositoryInterface;
    }

    public function index()
    {
        $categories=$this->categoryRepositoryInterface->getAllCategories();
        return view('posts.create.posts-create',['categories'=>$categories]);
    }

    public function postChange(Request $request,$post)
    {
        $this->PostRepositoryInterface->updatePost($request->title,$request->post_content,$post->id,$request->input('categories'));
        return $this->usersPost();
    }

    public function postForChange($post)
    {
        $categories=$this->categoryRepositoryInterface->getAllCategories();
        return view('posts.create.posts-create',['categories'=>$categories,'post'=>$post]);
    }

    public function show()
    {
        return view('posts.filter.all-posts',['posts'=>$this->PostRepositoryInterface->getAllPosts()]);
    }

    public function create(Request $request)
    {
        if($request->title && $request->post_content)$this->PostRepositoryInterface->createPost($request->title,$request->post_content,$request->input('categories'));
         return back();
    }

    public function post($post)
    {
        event(new ViewPost($post));
        return view('posts.post',['post'=>$post]);
    }

    public function usersPost(){
        return view('posts.filter.all-posts',['posts'=>$this->PostRepositoryInterface->getUsersPosts(Auth::id())]);
    }

    public function topPosts(){
        return view('posts.filter.all-posts',['posts'=>$this->PostRepositoryInterface->getMostViewedPosts()]);
    }

    public function unansweredPosts(){
        return view('posts.filter.all-posts',['posts'=>$this->PostRepositoryInterface->getUnansweredPosts()]);
    }

}
