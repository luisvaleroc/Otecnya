@extends('layouts.app')

@section('title', 'Añadir Empresas')
@section('content')
    
    @include('common.success')
    @include('common.errors')
    {!! Form::open(['route' => 'empresas.store', 'method' => 'POST']) !!}
        
        @include('empresa.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  
    
@endsection