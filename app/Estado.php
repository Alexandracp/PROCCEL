<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{   protected $table = "estados";
    protected $primarykey ='id_estado';
    public $timestamps = false;
    use HasFactory;

    public function ciudad(){
        return $this->belongsTo("App\ciudad");
    }
}
