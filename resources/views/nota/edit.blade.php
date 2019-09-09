@extends('layouts.app')

@section('title', 'Editar Cursos')
@section('content')
    @include('common.errors')
    @include('common.success')


    {!! Form::model($nota, ['route' => ['notas.update', $nota], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('note', 'nota') !!}
        {!! Form::text('note', null ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('time', 'Tiempo') !!}
        {!! Form::text('time', null ,['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}




@endsection