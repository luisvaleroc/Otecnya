<?php

namespace Otecnya\Http\Controllers;

use  Otecnya\Empleado;
use  Otecnya\Empresa;
use  Otecnya\Curso;
use  Otecnya\Nota;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curso $curso, Nota $nota)
    {
      
        $empleados = DB::table('empleados')
            ->join('notas', 'empleados.id', '=', 'notas.empleado_id')
            ->join('cursos', 'cursos.id', '=', 'notas.curso_id')
            ->select('empleados.name','notas.note','notas.time', 'notas.id')
            ->where('cursos.id', $curso->id)
            ->orderBy('id', 'desc')
            ->paginate(15);
           
          
           
       
        return view('nota.create', compact('curso', 'empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(curso $curso, Request $request)
    {
        $validateData = $request->validate([
            'note' => 'required',
            'time' => 'required',
            'rut' => 'required|exists:empleados'
            
        ]);

         
        $rut = $request->input('rut');
      
        $empleado = Empleado::where('rut', $rut)->first();
        $id_empleado = $empleado->id;
        
        
        $nota = new Nota();
        $nota->note = $request->input('note');
        $nota->curso_id = $curso->id;
        $nota->empleado_id = $id_empleado;
        
        $nota->time = $request->input('time');
       
        $nota->save();
       
        return redirect()->back()->with('status', 'la nota a sido agregado correctamente.');
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
    public function edit(Nota $nota)
    {
        return view('nota.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        
        // $validateData = $request->validate([

        //     'note' => 'required',
        //     'time' => 'required'
            
        $nota->note = $request->input('note');
        $nota->time = $request->input('time');
        // $nota->empleado_id = $request->input('empleado_id');
        // $nota->curso_id = $request->input('curso_id');

        $nota->save();
        
        
         return redirect()->route('notas.edit', [$nota])->with('status', 'La empresa a sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
    }
}
