<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'address', 'postal_code', 'phone_number'];

    public function user()
    {
        $this->belongsTo('App\Models\Users', 'user_id');
    }
}
