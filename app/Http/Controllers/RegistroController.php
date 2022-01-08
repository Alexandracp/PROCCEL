<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Genero;
use App\Tipo;
use phpDocumentor\Reflection\Types\Nullable;

class RegistroController extends Controller
{

            public function create()
            {
                $generos = Genero::all();
                $tipos = tipo::all();
                return view('auth.registro', compact('generos', 'tipos'));
            }


            public function store(Request $request)
            {
                $campos=[
                    'p_nombre_u' => 'required |string|max:30|alpha',
                    's_nombre_u' => 'string|max:20|alpha|nullable',
                    'p_apellido_u' => 'required|string|alpha',
                    's_apellido_u' => 'nullable |string|alpha',
                    'foto_u' => 'nullable',
                    'f_nacimiento_u' => 'required|date',
                    'cedula_u' => 'required|unique:users',
                    'n_telf_u' => 'numeric|regex:/(04)[0-9]{9}/|required',
                    'password' => 'required|min:5',
                    'email_u' => 'required|email',
                    'id_genero' => 'required',
                    'idnaci' => 'required',
                ];
        
                    $this->validate($request,$campos);

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
                $user->id_genero = $request->id_genero;
                $user->idnaci = $request->idnaci;
                $user->save();
                return redirect()->to('/login ')->with('message');
            }
            public function edit()
            {
                $user = User::all();
                $generos = Genero::all();
                $tipos = tipo::all();
                return view('admin.perfil', compact('generos', 'tipos'));
            }
        
            public function update(Request $request, $id)
            {
        
                $User = request()->except(['_token','_method']);
                
                if($request->hasFile('foto_u')){
                    $user = User::findOrFail($id);
                    Storage::delete('public/'.$user->foto_u);
                    $user['foto_u']=$request->file('foto_u')->store('uploads','public');
                }
        
                User::where('id','=',$id)->update($User);
                $user = User::findOrFail($id);
                $generos = Genero::all();
                $tipos = tipo::all();
                return view('admin.perfil', compact('generos', 'tipos'));
                
            }
 }

