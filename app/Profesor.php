<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $primaryKey = "id_prof";
    public $timestamps = false;

    public function cursos(){

        return $this->hasMany('Appe\Models\Curso', 'id_prof', 'id_prof');
    }
}

