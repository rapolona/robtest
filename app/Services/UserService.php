<?php

namespace App\Services;


use App\Exceptions\NoAvailableUserException;
use App\Exceptions\UserDeleteFailedException;
use App\Exceptions\UserUpdateFailedException;
use App\Exceptions\UserCreateFailedException;
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
        throw New UserCreateFailedException;
    }

    public function getAllUser(Request $request)
    {
        throw New NoAvailableUserException;
    }

    public function getUser($id)
    {
        throw New UserInvalidException;
    }

    public function updateUser($id, Request $request)
    {
        throw New UserUpdateFailedException;
    }

    public function deleteUser($id)
    {
        throw New UserDeleteFailedException;
    }

    public function deleteUsers(Request $request)
    {
        if(isset($request->ids)){
            $ids = explode(',', $request->ids);
            foreach($ids as $id){
                $this->deleteUser($id);
            }
        }
    }


}
