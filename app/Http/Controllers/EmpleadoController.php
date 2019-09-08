<?php

namespace Otecnya\Http\Controllers;

use  Otecnya\Empleado;
use  Otecnya\Empresa;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa, Request $request)
    {
        if($request->ajax()){
            $empleados = $empresa->empleados;
            return response()->json($empleados, 200);
        }
        $empleados = Empleado::all();

        return view('empleado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Empresa $empresa, Request $request)
    {
        if($request->ajax()){
        
            $empleado = new Empleado();
            $empleado->name = $request->input('name');
            $empleado->rut = $request->input('rut');
            $empleado->empresa_id = $request->input('empresa_id');
            $empleado->empresa()->associate($empresa)->save();
            $empleado->save();

            return response()->json([
                //"empresa" => $empresa,
                "message" => "Empleado creado correctamente.",
                "empleado" => $empleado
            ], 200);    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
    }
}
