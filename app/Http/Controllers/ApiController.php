<?php

namespace Otecnya\Http\Controllers;
use Otecnya\Empresa;
use Otecnya\Curso;
use Otecnya\Empleado;
use Otecnya\Nota;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function empleados()
    {

        
            $empleados = Empleado::all();
           

            return response()->json($empleados, 200);
       
      
    }


    public function cursos()
    {
        $cursos = Curso::all();
        return response()->json($cursos, 200);
    }
   
    public function addnotas(Request $request)
    {
      
	$empleados = Empleado::where('rut', $request->input('rut') );

	if (!isset ($empleados  )) {

      

            $empleado = new Empleado();
            $empleado->name = $request->input('name');
            $empleado->rut = $request->input('rut');
            $empleado->empresa_id = $request->input('empresa_id');
            //$empleado->empresa()->associate($request->input('empresa');)->save();
            $empleado->save();

        }
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
            $nota->curso_id = $request->input('curso_id');
            $nota->empleado_id = $id_empleado;
            
            $nota->time = $request->input('time');
            
           
            $nota->observation= $request->input('observation');
            $nota->save();
           
        
            return response()->json([
                "message" => "La nota a sido creada correctamente.",
                "empleado" => $request
            ], 200);    
        
      
       
}       



 


    

    

    

}
