<?php

namespace App\Services\Contracts;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function createUser(Request $request);

    public function getAllUser(Request $request);

    public function getUser(Request $request);

    public function updateUser(Request $request);

    public function deleteUser(Request $request);

}
