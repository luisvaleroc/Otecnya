@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
  <a class="btn btn-primary" href="/cursos/create">agregar</a>
    <table  id="cursos" class="table table-striped">
    
      
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>
                <th scope="col">nombre</th>               
                <th scope="col">Descripcion</th>
                @can('notas.index')
                <th scope="col">Ver Notas</th>
                @endcan
               
                
              </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <th scope="row">{{ $curso->id}}</th>
                    <td><img src="images/{{ $curso->image}}" alt="..." width="120" height="120" class="img-rounded"></td>
                    <td>{{ $curso->name}}</td>
                    <td>{{ $curso->descrip}}</td>
                   
                   
                   @can('notas.index')
                    <td><a class="button" style="font-size: 15px;" title="Agregar notas" href="/cursos/{{ $curso->id}}/notas">
                      <span class="fas fa-eye fa-1x"></span>
                      </a></a></td>
                      @endcan

                    
                   @can('cursos.edit')
                    <td><a class="button" style="font-size: 15px;" title="Editar Curso" href="/cursos/{{ $curso->id}}/edit">
                      <span class="fas fa-pencil-alt fa-1x"></span>
                      </a></a></td>
                      @endcan
                   @can('cursos.destroy')
                    <td>
                       {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger','onClick' => 'return confirm("¿Seguro desea eliminar este registro?");'  ]) !!}
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
          $('#cursos').DataTable();
          } );
          
          </script>
          
    

@endsection

