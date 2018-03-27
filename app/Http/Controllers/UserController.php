<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    Public function index()
    {
        return view('usermain');
    }

    public function getUsers(Request $request)
    {
        return 'getUsers';
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
