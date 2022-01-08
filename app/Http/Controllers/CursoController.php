<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Profesor;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
/**
 * Class CursoController
 * @package App\Http\Controllers
 */
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $datos['cursos'] = Curso::paginate(5);
        
        return view('curso.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curso = new Curso();
        $profesors = profesor::pluck('pnomb_p','id_prof');
        $Categorias = Categoria::all();
        return view('curso.create', compact('curso','profesors','Categorias'));
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
            'curso' => 'required |string|max:50',
            'f_inicio' => 'required',
            'dia_clase' => 'required|max:10',
            'h_inicio' => 'required',
            'h_final' => 'required',
            'cupos' => 'required',
            'duracion' => 'required',
            'costo_u' => 'required',
            'descripcion' => 'required',
            'id_categoria' => 'nullable',
            'foto_c' => 'required|max:10000|mimes:jpg,jpeg,png',
            'id_prof' => 'nullable',
        ];


        $this->validate($request,$campos);

       $curso = request() ->except('_token');

            if($request->hasFile('foto_c')){
                        $curso['foto_c']=$request->file('foto_c')->store('uploads','public');
                    }
            Curso::insert($curso);
            
            return redirect('curso')->with('Curso creado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        $profesors = profesor::pluck('pnomb_p','id_prof');
        return view('curso.show', compact('curso','profesors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        $profesors = profesor::pluck('pnomb_p','pape_p','id_prof');
        $Categorias = Categoria::all();
        return view('curso.edit', compact('curso','profesors','Categorias'));
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

        $Curso = request()->except(['_token','_method']);
        
        if($request->hasFile('foto_c')){
            $curso = Curso::findOrFail($id);
            Storage:: delete('public/'.$curso->foto_c);
            $Curso['foto_c']=$request->file('foto_c')->store('uploads','public');
        }

        Curso::where('id_curso','=',$id)->update($Curso);
        $curso = Curso::findOrFail($id);
        $profesors = profesor::pluck('pnomb_p','id_prof');
        return view('curso.edit', compact('curso','profesors'));
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $curso= Curso::findOrFail($id);
        if(Storage::delete('public/'.$curso->foto_c)){
           Curso::destroy($id); 
        }
        

        return redirect()->route('curso.index')->with('mensaje','Curso Eliminado');
    }
}
