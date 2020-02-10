<?php

namespace App\Http\Controllers;

use App\Contracts\CategoryRepositoryInterface\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $CategoryRepositoryInterface;


    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->CategoryRepositoryInterface=$categoryRepository;
    }

    public function filter(){
        return view('posts.filter.categories',['categories'=>$this->CategoryRepositoryInterface->getAllCategories()]);
    }

    public function create(Request $request){
        if($request->input('category_name')){
            $this->CategoryRepositoryInterface->create($request->input('category_name'));
            return back();
        }
    }

    public function make(Request $request){
        $posts=$this->CategoryRepositoryInterface->filterByCategory($request->categories);
        return view('posts.filter.categories',['categories'=>$this->CategoryRepositoryInterface->getAllCategories(),'posts'=>$posts]);
    }
}
