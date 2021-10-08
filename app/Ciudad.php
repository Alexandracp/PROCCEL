<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function estado(){
        return $this->belongsTo("App\estado");
    }
}
