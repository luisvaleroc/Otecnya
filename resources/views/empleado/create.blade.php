@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
    
    @include('common.success')
    @include('common.errors')
    {!! Form::open(['route' => `empresas/{{ $empresa->id }}/empleados`, 'method' => 'POST', 'files' => true]) !!}
        
        @include('empleado.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    



    <table id="empleado" class="table table-striped">
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
                @if ($empleado->note > 80)
                <td>Aprobado</td>
            @else
            <td>Reprobado</td>
            @endif


                <td><a class="btn btn-primary" href="/notas/{{ $empleado->id}}/edit">Editar</a></td>
                <td>
                   {!! Form::open(['route' => [`notas/{{notas}}.destroy`, $empleado->id], 'method' => 'DELETE']) !!}
                     {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>



      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      
      
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      
      <script>
      $(document).ready(function() {
      $('#empleado').DataTable();
      } );
      
      </script>
      



 @endsection
