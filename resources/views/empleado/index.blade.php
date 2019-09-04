@extends('layouts.app')

@section('title', 'empleados')
@section('content')

    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Rut</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <th scope="row">{{ $empleado->id}}</th>
                    <td>{{ $empleado->name}}</td>
                    <td>{{ $empleado->rut}}</td>
                    <td><a class="btn btn-primary" href="">Editar</a></td>
                    <td><a class="btn btn-danger" href="">Eliminar</a></td>
                </tr>
              @endforeach
              
            </tbody>
          </table>



@endsection