@extends('layouts.app')

@section('title', 'Añadir Cursos')
@section('content')
    
    @include('common.success')
    @include('common.errors')
    {!! Form::open(['route' => 'cursos.store', 'method' => 'POST', 'files' => true]) !!}
        
        @include('curso.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    <!--<form class="form-group" method="POST" action="/cursos" enctype="multipart/form-data" >
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
    </form> -->
    
@endsection