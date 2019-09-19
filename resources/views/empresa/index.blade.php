@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
  @can('empresas.create')
  <a class="btn btn-primary" href="{{ route('empresas.create') }}">agregar</a>
  @endcan
    <table id="empresas" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">Descripcion</th>
                {{-- <th scope="col">Empleados</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                 --}}
              </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id}}</th>
                    <td>{{ $empresa->name}}</td>
                    <td>{{ $empresa->description}}</td>
                   
                   

                    @can('empleados.index')
                    
                    <td><a class="button" style="font-size: 15px;" title="Empleados" href="/empresas/{{ $empresa->id}}/empleados">
                      <span class="fas fa-eye fa-1x"></span>
                      </a></a></td>
                      @endcan

                      @can('empresas.edit')
                      <td><a class="button" style="font-size: 15px;" title="Editar empresa" href="{{ route('empresas.edit', $empresa->id) }}">
                        <span class="fas fa-pencil-alt fa-1x"></span>
                        </a></a></td>
                      @endcan



                      @can('empresas.destroy')
                        
                      <td>
                       {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => ' btn btn-danger', 'onClick' => 'return confirm("¿Seguro desea eliminar esta empresa?. Este acción eliminara todos empleados y usuarios asociados a ella.");']) !!}
                        
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
      $('#empresas').DataTable();
      } );
      
      </script>
      



@endsection