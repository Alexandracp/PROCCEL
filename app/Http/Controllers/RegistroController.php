<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Genero;
use App\Tipo;
use App\Ciudad;
use App\Estado;

class RegistroController extends Controller
{

    public function create()
    {
        $generos = Genero::all();
        $tipos = tipo::all();
        $estados = estado::all();
        return view('auth.registro', compact('generos', 'tipos', 'estados'));
    }


    public function ciudads(Request $request)
    {
        if (isset($request->estado_id)) {
            $ciudads = Ciudad::where('id_estado', $request->estado_id)->get();
            return response()->json(
                [
                    'lista' => $ciudads,
                    'success' => true
                ]
            );
        } else {
            return response()->json(
                [
                    'success' => false
                ]
            );
        }
    }

           public function store(Request $request)
           {
            $user = new User();
            $user->p_nombre_u = $request->p_nombre_u;
            $user->s_nombre_u = $request->s_nombre_u;
            $user->p_apellido_u = $request->p_apellido_u;
            $user->s_apellido_u = $request->s_apellido_u;
            $user->foto_u = $request->foto_u;
            $user->f_nacimiento_u = $request->f_nacimiento_u;
            $user->cedula_u = $request->cedula_u;
            $user->n_telf_u = $request->n_telf_u;
            $user->email_u = $request->email_u;
            $user->password = bcrypt($request->password);
            $user->direccion_u = $request->direccion_u;
            $user->id_ciudad = $request->id_ciudad;
            $user->id_genero = $request->id_genero;
            $user->id_nacionalidad = $request->id_nacionalidad;
            $user->save();
            return redirect()->to('/');
           }
 }

