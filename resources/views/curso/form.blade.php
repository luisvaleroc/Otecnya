<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null ,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descrip', 'Descripción') !!}
    {!! Form::text('descrip', null ,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Imagen') !!}
    {!! Form::file('image') !!}
</div>