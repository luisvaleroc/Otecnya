@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
    <table class="table table-striped">
        <a class="btn btn-primary" href="/cursos/create">agregar</a>
      
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>
                <th scope="col">nombre</th>
                <th scope="col">notas</th>
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
                    <td><a class="btn btn-primary" href="/cursos/{{ $curso->id}}/notas">Notas</a></td>
                    <td><a class="btn btn-primary" href="/cursos/{{ $curso->id}}/edit">Editar</a></td>
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