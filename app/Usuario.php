<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function setPasswordAttribute($password)
    {
        $this ->attributes['password'] = $password;
    }
}
