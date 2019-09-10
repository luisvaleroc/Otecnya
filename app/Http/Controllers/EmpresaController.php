<?php

namespace Otecnya\Http\Controllers;

use Illuminate\Http\Request;
use  Otecnya\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
           
       ]);
        $empresa = new Empresa();
        $empresa->name = $request->input('name');
        $empresa->description = $request->input('description');
       
        $empresa->save();
        return redirect()->route('empresas.create')->with('status', 'La empresa a sido agregada correctamente.');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required'
            
        ]);

        $empresa->name = $request->input('name');
        $empresa->description = $request->input('description');
        $empresa->save();
        
        return redirect()->route('empresas.edit', [$empresa])->with('status', 'La empresa a sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('empresas.index')->with('status', 'El curso a sido eliminado correctamente.');;
    }
}
