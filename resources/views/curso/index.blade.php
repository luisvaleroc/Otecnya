@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
  <a class="btn btn-primary" href="/cursos/create">agregar</a>
    <table class="table table-striped">
    
      
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>
                <th scope="col">nombre</th>
               
                <th scope="col">Descripcion</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <th scope="row">{{ $curso->id}}</th>
                    <td><img src="images/{{ $curso->image}}" alt="..." width="120" height="120" class="img-rounded"></td>
                    <td>{{ $curso->name}}</td>
                    <td>{{ $curso->descrip}}</td>
                   
                   
                   
                    <td><a class="button" style="font-size: 15px;" title="Agregar notas" href="/cursos/{{ $curso->id}}/notas">
                      <span class="fas fa-eye fa-1x"></span>
                      </a></a></td>

                    
                   
                    <td><a class="button" style="font-size: 15px;" title="Editar Curso" href="/cursos/{{ $curso->id}}/edit">
                      <span class="fas fa-pencil-alt fa-1x"></span>
                      </a></a></td>
                   
                    <td>
                       {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>



@endsection