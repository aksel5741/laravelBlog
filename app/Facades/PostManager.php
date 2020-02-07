<?php


namespace App\Facades;



use Illuminate\Support\Facades\Facade;

class PostManager extends Facade
{
    protected static function getFacadeAccessor() { return 'App\Repository\PostRepository'; }
}
