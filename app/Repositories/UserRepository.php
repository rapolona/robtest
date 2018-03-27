<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserInterface;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements UserInterface
{

    protected $model;

    public function __construct(Users $user)
    {
        parent::__construct($user);
        $this->model = $user;
    }

}