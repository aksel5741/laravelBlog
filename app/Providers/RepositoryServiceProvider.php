<?php

namespace App\Providers;

use App\Contracts\CategoryRepositoryInterface\CategoryRepositoryInterface;
use App\Contracts\CommentRepositoryInterface\CommentRepositoryInterface;
use App\Contracts\PostRepositoryInterface\PostRepositoryInterface;
use App\Contracts\UserRepositoryInterface\UserRepositoryInterface;

use App\Repository\CategoryRepository;
use App\Repository\CommentRtrepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRtrepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
