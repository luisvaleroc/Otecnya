@extends('layouts.app')

@section('title', 'Cursos')
@section('content')

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
                    <td><a class="btn btn-primary" href="/cursos/{{ $curso->id}}/edit">Editar</a></td>
                    <td><a class="btn btn-danger" href="">Eliminar</a></td>
                </tr>
              @endforeach
              
            </tbody>
          </table>



@endsection