@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
  <a class="btn btn-primary" href="/empresas/create">agregar</a>
    <table id="empresas" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Empleados</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id}}</th>
                    <td>{{ $empresa->name}}</td>
                    <td>{{ $empresa->description}}</td>
                   
                   


                    
                    <td><a class="button" style="font-size: 15px;" title="Empleados" href="/empresas/{{ $empresa->id}}/empleados">
                      <span class="fas fa-eye fa-1x"></span>
                      </a></a></td>



                    <td><a class="button" style="font-size: 15px;" title="Editar empresa" href="/empresas/{{ $empresa->id}}/edit">
                      <span class="fas fa-pencil-alt fa-1x"></span>
                      </a></a></td>
                    <td>
                       {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => ' btn btn-danger', 'onClick' => 'return confirm("¿Seguro desea eliminar este registro?");']) !!}
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
      $('#empresas').DataTable();
      } );
      
      </script>
      



@endsection