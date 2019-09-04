@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')

{!! Form::open(['route' => 'cursos.store', 'method' => 'POST', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
    </div>
{!! Form::close() !!}
    <form class="form-group" method="POST" action="/cursos" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="">Nombre</label><input type="text" name="name" class="form-control">
            
            
        </div>
        <div class="form-group">
                
            <label for="">Descripcion</label><input type="text" name="descrip" class="form-control">
                
        </div>
        <div class="form-group">
                    <label for="">Imagen</label><input type="file" name="image" class="" >
                    
                </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    
@endsection