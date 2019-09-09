@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
    
    @include('common.success')
    @include('common.errors')
    {!! Form::open(['route' => `cursos/{{ $curso->id }}/notas`, 'method' => 'POST', 'files' => true]) !!}
        
        @include('nota.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    



    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">nota</th>
            <th scope="col">tiempo</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <th scope="row">{{ $empleado->id}}</th>
                <td>{{ $empleado->name}}</td>
                <td>{{ $empleado->note}}</td>
                <td>{{ $empleado->time}}</td>
                @if ($empleado->note > 94)
                <td>Aprobado</td>
            @else
            <td>Reprobado</td>
            @endif


                <td><a class="btn btn-primary" href="/notas/{{ $empleado->id}}/edit">Editar</a></td>
                <td>
                   {!! Form::open(['route' => ['notas.destroy', $empleado->id], 'method' => 'DELETE']) !!}
                     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>







    @foreach($empleados as $empleado)
    <tr>
        <th scope="row">{{ $empleado->name}}</th>
        <td>{{ $empleado->note}}</td>
        <td>{{ $empleado->time}}</td>

  @endforeach
    
@endsection