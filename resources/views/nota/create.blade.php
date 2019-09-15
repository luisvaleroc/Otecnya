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



    <table id="notas" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">nota</th>
            <th scope="col">tiempo</th>
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
                @if ($empleado->note > 80)
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





      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      
      
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      
      <script>
      $(document).ready(function() {
      $('#notas').DataTable();
      } );
      
      </script>
      



    
@endsection