<?php

namespace App\Http\Controllers;

use App\Exceptions\NoAvailableUserException;
use App\Exceptions\UserDeleteFailedException;
use App\Exceptions\UserUpdateFailedException;
use App\Exceptions\UserInvalidException;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    Public function index()
    {
        return view('usermain');
    }

    public function getUsers(Request $request)
    {
        try{
            
        } catch(\Exception $e){

        }
    }

    public function deleteUsers(Request $request)
    {
        return 'deleteUsers';
    }

    public function getUserDetails(Request $request)
    {
        return 'getUserDetails';
    }

    public function addUser(Request $request)
    {
        return 'addUser';
    }

    public function updateUser(Request $request)
    {
        return 'updateUser';
    }

    public function deleteUser(Request $request)
    {
        return 'deleteUser';
    }

}
