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
        // if($request->ajax()){
        //     $empleados = $empresa->empleados;
        //     return response()->json($empleados, 200);
        // }
        
       
        $empleados = $empresa->empleados()->orderBy('id', 'ASC')->paginate(15);
        
            
        return view('empleado.index', compact('empleados', 'empresa'));
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
        // if($request->ajax()){
            $validateData = $request->validate([

                'name' => 'required',
                'rut' => 'required|unique:empleados'
            ]);

        
            $empleado = new Empleado();
            $empleado->name = $request->input('name');
            $empleado->rut = $request->input('rut');
            $empleado->empresa_id = $request->input('empresa_id');
            $empleado->empresa()->associate($empresa)->save();
            $empleado->save();

        //     return response()->json([
        //         //"empresa" => $empresa,
        //         "message" => "Empleado creado correctamente.",
        //         "empleado" => $empleado
        //     ], 200);    
        // }
        return redirect()->back()->with('status', 'El empleado a sido agregado con el rut '. $empleado->rut. ' correctamente.');
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
        $empleado = Empleado::findOrFail($id);
        $empresas = Empresa::all();
        
        return view('empleado.edit', compact('empleado', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $validateData = $request->validate([

            'name' => 'required',
            'rut' => 'required',
            'empresa_id'=> 'required']);
            
        $empleado->name = $request->input('name');
        $empleado->rut = $request->input('rut');
        $empleado->empresa_id = $request->input('empresa_id');
        $empleado->save();
        return redirect()->back()->with('status', 'El empleado a sido actualizado correctamente.');
        
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
         return redirect()->back()->with('status', 'la nota a sido eliminado correctamente.');

    }
}
