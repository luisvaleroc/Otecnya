@extends('layouts.app')

@section('title', 'Cursos')
@section('content')
  @include('common.success')
    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">Descripcion</th>
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
                    <td><a class="btn btn-primary" href="/empresas/{{ $empresa->id}}">Ver mas</a></td>
                    <td><a class="btn btn-primary" href="/empresas/{{ $empresa->id}}/edit">Editar</a></td>
                    <td>
                       {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>



@endsection