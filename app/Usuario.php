<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuario extends Model implements AuthenticatableContract {

    use Authenticatable;
    public $timestamps = false;

    public function setPasswordAttribute($password)
    {
        $this ->attributes['password'] = $password;
    }
}
