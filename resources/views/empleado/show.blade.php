@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
   <h1>{{ $empleado->Name}}</h1>
   <p>{{ $empleado->Rut}}</p>
   <td><a class="btn btn-primary" href="/empleados/{{ $empleado->id}}">Agregar</a></td>



@endsection