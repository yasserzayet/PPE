<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    //
    protected $fillable = [
        'user', 'password'
    ];
}
