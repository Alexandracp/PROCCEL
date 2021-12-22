<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id_curso
 * @property $curso
 * @property $f_inicio
 * @property $dia_clase
 * @property $h_inicio
 * @property $h_final
 * @property $cupos
 * @property $duracion
 * @property $costo_u
 * @property $descripcion
 * @property $status_c
 * @property $foto_c
 * @property $id_prof
 *
 * @property Inscripcion[] $inscripcions
 * @property Profesor $profesor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    public $timestamps = false;
    protected $primaryKey = 'id_curso';
    
    static $rules = [
		'curso' => 'required',
		'f_inicio' => 'required',
		'dia_clase' => 'required',
		'h_inicio' => 'required',
		'h_final' => 'required',
		'cupos' => 'required',
		'duracion' => 'required',
		'costo_u' => 'required',
		'descripcion' => 'required',
        'foto_c' => 'required',
		'id_prof' => 'required',
    ];

    protected $perPage = 20;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcions()
    {
        return $this->hasMany('App\Models\Inscripcion', 'id_curso', 'id_curso');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesor()
    {
        return $this->hasOne('App\Profesor', 'id_prof', 'id_prof');
    }
    

}
