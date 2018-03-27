<?php

namespace App\Services;


use App\Exceptions\NoAvailableUserException;
use App\Exceptions\UserDeleteFailedException;
use App\Exceptions\UserUpdateFailedException;
use App\Exceptions\UserInvalidException;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(Request $request)
    {

    }

    public function getAllUser(Request $request)
    {

    }

    public function getUser(Request $request)
    {

    }

    public function updateUser(Request $request)
    {

    }

    public function deleteUser(Request $request)
    {

    }


}
