<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersRepository extends BaseRepository implements UserRepositoryInterface
{

    protected $model;

    public function __construct(Users $user)
    {
        parent::__construct($user);
        $this->model = $user;
    }

}