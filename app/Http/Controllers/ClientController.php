<?php

namespace Otecnya\Http\Controllers;
use Otecnya\User;

use  Otecnya\Empleado;
use  Otecnya\Empresa;
use  Otecnya\Curso;
use  Otecnya\Nota;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso )
    {
        $empleados = DB::table('empleados')
            ->join('notas', 'empleados.id', '=', 'notas.empleado_id')
            ->join('cursos', 'cursos.id', '=', 'notas.curso_id')
            ->select('empleados.name','notas.note','notas.time', 'notas.id', 'notas.observation')
            ->where('cursos.id', $curso->id)
            ->where('empleados.empresa_id', auth()->user()->empresa_id)
            ->orderBy('id', 'desc')
            ->get();

            return view('cliente.index', compact('curso', 'empleados'));
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
    public function destroy($id)
    {
        //
    }
}
