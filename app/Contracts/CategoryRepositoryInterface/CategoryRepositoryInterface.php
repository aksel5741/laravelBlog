<?php


namespace App\Contracts\CategoryRepositoryInterface;


interface CategoryRepositoryInterface
{
    public function create($name);
    public function getAllCategories();
}
