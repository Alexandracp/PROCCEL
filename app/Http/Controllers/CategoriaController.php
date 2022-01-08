<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
/**
 * Class CursoController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria['categorias'] = Categoria::paginate(5);
        return view('categoria.index', $categoria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.create', compact('categoria'));
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
            'categoria' => 'required |string|max:20',
            'desc_p' => 'nullable',
        ];


        $this->validate($request,$campos);

       $categoria = request() ->except('_token');

          
            Categoria::insert($categoria);
            
            return redirect('categoria')->with('Categoria creada con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
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

        $Categoria = request()->except(['_token','_method']);
        
        Categoria::where('id_categoria','=',$id)->update($Categoria);
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoria= Categoria::findOrFail($id);
        return redirect()->route('categoria.index')->with('mensaje','Categoria Eliminada');
    }
}
