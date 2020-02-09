<?php

namespace App\Http\Controllers;


use App\Contracts\CommentRepositoryInterface\CommentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    private $CommentRepositoryInterface;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->CommentRepositoryInterface=$commentRepository;
    }


    public function create(Request $request,$post)
    {
        $this->CommentRepositoryInterface->create($request->comment,$post->id,Auth::id());

        return back()->with('Okay, alright');
    }
}
