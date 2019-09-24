


<div class="form-group">
	{{ Form::label('name', 'Nombre del Usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<hr>

<div class="form-group">
	{{ Form::label('password', 'Cambiar contraseña') }}
	<br/>
	<input type="text" name="password2"><br>
</div>
<hr>

<h3>Empresa</h3>
<div class="form-group">
<select name="empresa_id" id="empresa_id">
	@if($user->empresa === null)

	<option value=" ">Elija la empresa </option>
	@else
		<option value="{{$user->empresa_id}}">{{ $user->empresa->name}}</option> 
	@endif
		@foreach($empresas as $empresa)
		<option value="{{$empresa->id}}">{{ $empresa->name}}</option> 
		@endforeach
    </select>
</div>		


<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>






