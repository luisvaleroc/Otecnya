@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
 
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <table id="notas2" class="table table-striped">
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