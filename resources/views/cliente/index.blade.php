@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
 
@can('empresas.create')
<a class="btn btn-primary" href="{{ route('excel.show', $curso->id) }}">Descargar</a>
@endcan
<br>
    <table id="notas2" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rut</th>
            <th scope="col">Nota</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Observación</th>
            <th scope="col">Estado</th>
            
            
          </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <th scope="row">{{ $empleado->id}}</th>
                <td>{{ $empleado->name}}</td>
                <td>{{ $empleado->rut}}</td>
                <td>{{ $empleado->note}}</td>
                <td>{{ $empleado->time}}</td> 
                <td>{{ $empleado->observation}}</td>

                @if ($empleado->note > 70)
                <td>Aprobado</td>
            @else
            <td>Reprobado</td>
            @endif

          
            </tr>
          @endforeach
          
        </tbody>
      </table>




      <script>
      $(document).ready(function() {
      $('#notas2').DataTable();
      } );
      
      </script>
      



    
@endsection