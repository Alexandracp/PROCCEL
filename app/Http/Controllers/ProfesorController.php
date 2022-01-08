<?php

namespace App\Http\Controllers;

use App\Profesor;
use App\Genero;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
/**
 * Class CursoController
 * @package App\Http\Controllers
 */
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['profesors'] = Profesor::paginate(5);
        return view('profesor.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesor = new Profesor();
        $generos = Genero::all();
        $tipos = tipo::all();
        return view('profesor.create', compact('generos', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
                    'pnomb_p' => 'required |string|max:50',
                    'snomb_p' => 'nullable',
                    'pape_p' => 'required',
                    'sape_p' => 'nullable',
                    'fnac_p' => 'required',
                    'foto_p' => 'nullable',
                    'cedu_p' => 'required',
                    'ntel_p' => 'required',
                    'emai_p'=> 'required',
                    'id_genero' => 'required',
                    'idnaci' => 'required',
                ];

        $mensaje=[
            'required'=>'El campo es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

       $profesor = request() ->except('_token');

            if($request->hasFile('foto_p')){
                        $curso['foto_p']=$request->file('foto_p')->store('uploads','public');
                    }
            Profesor::insert($profesor);
            
            return redirect('profesor')->with('mensaje','Profesor registrado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        $generos = Genero::all();
        $tipos = tipo::all();
        return view('profesor.show', compact('profesor','generos', 'tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        $generos = Genero::all();
        $tipos = tipo::all();
        return view('profesor.edit', compact('profesor','generos', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Curso $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $profesor = request()->except(['_token','_method']);
        
        if($request->hasFile('foto_p')){
            $profesor = Profesor::findOrFail($id);
            Storage:: delete('public/'.$profesor->foto_p);
            $profesor['foto_p']=$request->file('foto_p')->store('uploads','public');
        }

        Profesor::where('id_prof','=',$id)->update($profesor);
        $profesor = Profesor::findOrFail($id);
        $generos = Genero::all();
        $tipos = tipo::all();
        return view('profesor.edit', compact('profesor','generos', 'tipos'));
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $profesor= Profesor::findOrFail($id);
        if(Storage::delete('public/'.$profesor->foto_c)){
           Profesor::destroy($id); 
        }
        

        return redirect()->route('curso.index')->with('mensaje','Curso Eliminado');
    }
}
