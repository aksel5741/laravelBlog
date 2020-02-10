<?php


namespace App\Repository;


use App\Category;
use App\Contracts\CategoryRepositoryInterface\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    private $Category;

    public function __construct(Category $category)
    {
        $this->Category=$category;
    }

    public function create($name)
    {
        $category=new Category();
        $category->name=$name;
        $category->save();
    }

    public function getAllCategories()
    {
        return $this->Category->all();
    }
    public function filterByCategory($category)
    {
       return $posts=$this->Category->find($category[0])->posts()->get();
    }

}
