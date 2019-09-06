@extends('layouts.app')

@section('title', 'Editar Cursos')
@section('content')
    @include('common.errors')
    @include('common.success')

    {!! Form::model($empresa, ['route' => ['empresas.update', $empresa], 'method' => 'PUT']) !!}

        @include('empresa.form')

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection