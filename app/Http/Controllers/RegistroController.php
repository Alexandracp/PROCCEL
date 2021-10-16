<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
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
            $usuario = new Usuario();
            $usuario->p_nombre_u = $request->p_nombre_u;
            $usuario->s_nombre_u = $request->s_nombre_u;
            $usuario->p_apellido_u = $request->p_apellido_u;
            $usuario->s_apellido_u = $request->s_apellido_u;
            $usuario->foto_u = $request->foto_u;
            $usuario->f_nacimiento_u = $request->f_nacimiento_u;
            $usuario->cedula_u = $request->cedula_u;
            $usuario->n_telf_u = $request->n_telf_u;
            $usuario->email_u = $request->email_u;
            $usuario->password = bcrypt($request->password);
            $usuario->direccion_u = $request->direccion_u;
            $usuario->id_ciudad = $request->id_ciudad;
            $usuario->id_genero = $request->id_genero;
            $usuario->id_nacionalidad = $request->id_nacionalidad;
            $usuario->save();
            return redirect()->to('/');
           }
 }

   // public function store(Request $request)
    
        /*
    $user = usuario::create(request(['p_nombre_u','s_nombre_u', 'p_apellido_u',
     's_apellido_u','foto_u','f_nacimiento_u',
    'cedula_u','n_telf_u','status_u','email_u', 'usuario','password',
    'direccion_u']));
    */

       // $user = usuario::create($request->all());

        // auth()->login($user);
       // return redirect()->to('/');
    
    
