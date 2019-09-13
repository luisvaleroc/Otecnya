@extends('layouts.app')

@section('title', 'Editar Cursos')
@section('content')
    @include('common.errors')
    @include('common.success')


  
<form class="form-group" method="POST" action="/empleados/{{$empleado->id}}" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label><input type="text" name="name" value="{{ $empleado->name}}" class="form-control">
            
            
        </div>
        <div class="form-group">
                
            <label for="">Rut</label><input type="text" name="rut" value="{{ $empleado->rut}}" class="form-control">
                
        </div>
        <div class="form-group">
                
            <label for="">Empresa</label>
        <select name="empresa_id" id="empresa_id">
        <option value="{{$empleado->empresa->id}}">{{$empleado->empresa->name}}</option>
            @foreach ($empresas as $empresa)
        <option value="{{$empresa->id}}">{{$empresa->name}}</option>
            @endforeach
        
        </select>                
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>






    
@endsection