@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
   <h1>{{ $empresa->name}}</h1>
   <p>{{ $empresa->description}}</p>
  
<modal-button-empleado></modal-button-empleado>
<list-of-empleados></list-of-empleados>
<create-form-empleado></create-form-empleado>



@endsection