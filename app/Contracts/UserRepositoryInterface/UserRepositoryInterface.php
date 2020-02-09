<?php


namespace App\Contracts\UserRepositoryInterface;


interface UserRepositoryInterface
{
    public function getUserById($id);

    public function getAllUsers();
}