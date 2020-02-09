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

    public function getAllCategories(){
        return $this->CategoryRepositoryInterface->getAllCategories();
    }
}
