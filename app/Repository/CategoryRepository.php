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
    public function getAllCategories()
    {
        return $this->Category->all();
    }
}