@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
    @include('common.success')
    @include('common.errors')
    @can('notas.create')
    {!! Form::open(['route' => `cursos/{{ $curso->id }}/notas`, 'method' => 'POST', 'files' => true]) !!}
        
        @include('nota.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    @endcan

    <table id="notas3" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nota</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Observación</th>
            <th scope="col">Empresa</th>
            <th scope="col">Estado</th>
            
            
          </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <th scope="row">{{ $empleado->id}}</th>
                <td>{{ $empleado->name}}</td>
                <td>{{ $empleado->note}}</td>
                <td>{{ $empleado->time}}</td>
                <td>{{ $empleado->observation}}</td>
                <td>{{ $empleado->empresa_name}}</td>
                @if ($empleado->note > 70)
                <td>Aprobado</td>
            @else
            <td>Reprobado</td>
            @endif

            @can('notas.edit')
                <td><a class="btn btn-primary" href="/notas/{{ $empleado->id}}/edit">Editar</a></td>
                @endcan
                @can('notas.destroy')
                <td>
                   {!! Form::open(['route' => ['notas.destroy', $empleado->id], 'method' => 'DELETE']) !!}
                     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
                @endcan
            </tr>
          @endforeach
          
        </tbody>
      </table>


      {{-- {{ $empleados->render() }} --}}



      <script>
        $(document).ready(function() {
        $('#notas3').DataTable();
        } );
        
        </script>
        
  


    
@endsection