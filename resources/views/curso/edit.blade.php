@extends('layouts.app')

@section('title', 'Editar Cursos')
@section('content')

    <form class="form-group" method="POST" action="/cursos/{{ $curso->id}}" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label><input type="text" name="name" value="{{ $curso->name}}" class="form-control">
            
            
        </div>
        <div class="form-group">
                
            <label for="">Descripcion</label><input type="text" name="descrip" value="{{ $curso->descrip}}" class="form-control">
                
        </div>
        <div class="form-group">
                    <label for="">Imagen</label><input type="file" name="image" class="" >
                    
                </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    
@endsection