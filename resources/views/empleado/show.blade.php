@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
   <h1>{{ $empleado->name}}</h1>
   <p>{{ $empleado->rut}}</p>
   <td><a class="btn btn-primary" href="/empleados/{{ $empleado->id}}">Agregar</a></td>



@endsection