<?php

namespace Otecnya\Http\Controllers;

use  Otecnya\Curso;
use Illuminate\Http\Request;
use Otecnya\Http\Requests\StoreCursoRequest;
use Otecnya\Http\Requests\UpdateCursoRequest;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $request->user()->authorizedRoles('admin');
        $cursos = Curso::all();

        return view('curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCursoRequest $request)
    {
       // $validateData = $request->validate([
            //'name' => 'required',
            //'descrip' => 'required',
           // 'image' => 'required| image'
       // ]);

        $curso = new Curso();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $curso->name = $request->input('name');
        $curso->descrip = $request->input('descrip');
        $curso->image = $name;
        $curso->save();
        return redirect()->route('cursos.create')->with('status', 'El curso a sido agregado correctamente.');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('curso.edit', compact('curso'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
         $validateData = $request->validate([
            'name' => 'required',
            'descrip' => 'required'
            
        ]);

        $curso->fill($request->except('image'));
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $curso->image = $name;
            $file->move(public_path().'/images/', $name);
        }
        $curso->save();
        return redirect()->route('cursos.edit', [$curso])->with('status', 'El curso a sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $file_path = public_path().'/images/' .$curso->image;
        \File::delete($file_path);

        $curso->delete();
        return redirect()->route('cursos.index')->with('status', 'El curso a sido eliminado correctamente.');;
    }
}
