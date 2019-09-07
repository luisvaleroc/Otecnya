@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
   <h1>{{ $empresa->name}}</h1>
   <p>{{ $empresa->description}}</p>
   <td><a class="btn btn-primary" href="/empresas/{{ $empresa->id}}">Agregar</a></td>

<example-component></example-component>

@endsection