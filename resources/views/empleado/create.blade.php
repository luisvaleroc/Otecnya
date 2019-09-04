@extends('layouts.app')

@section('title', 'Añadir empleados')
@section('content')

    <form class="form-group" method="POST" action="/empleados">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label><input type="text" name="name" class="form-control">
            <label for="">Rut</label><input type="text" name="rut" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    
@endsection