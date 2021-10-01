<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\genero;
use App\tipo;
use App\ciudad;
use App\estado;

class RegistroController extends Controller
{
    public function create() {
        $generos = Genero:: all();
        $tipos = tipo:: all();
        
        $estados = estado::all();
        return view('auth.registro', compact('generos'), compact('tipos'), compact('estados'));
    }

    public function index() {
        $estados = estado::all();
        return view('auth.registro', compact('estados'));
    }

    public function ciudades(Request $request){

        if(isset($request->texto)){
            $ciudades = ciudades::whereid_ciudad($request->texto)->get();
            return response() -> json(
                [
                    'lista' => $ciudades,
                    'success' => true
                ]
                );
        }else
            return response() -> json(
                [
                    'success' => false
                ]
                );

    }

    public function store(Request $request) {

      /**$user = usuario::create(request(['p_nombre_u','s_nombre_u', 'p_apellido_u',
                                         's_apellido_u','foto_u','f_nacimiento_u',
                                         'cedula_u','n_telf_u','status_u','email_u', 'usuario','password',
                                         'direccion_u']));
    */
    
        $user= usuario::create($request->all());
        
        auth()->login($user);
        return redirect()->to('/');
    
    }


}