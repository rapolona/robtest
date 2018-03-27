<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email'];

    public function profile()
    {
        $this->hasOne('App\Models\UserProfile', 'user_id');
    }
}
