@extends('layouts.app')

    @section('title', 'empleados')
    @section('content')

                        <h1>{{ $empresa->name}}</h1>
                        <p>{{ $empresa->description}}</p>
                       
                        @can('empleados.create')
                        @include('common.success')
                        @include('common.errors')

                        {!! Form::open(['route' => `empresas/{{ $empresa->id }}/empleado`, 'method' => 'POST', 'files' => true]) !!}
                                
                        @include('empleado.form')

                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        @endcan
                        <table id="empleados55" class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">rut</th>

                            
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <th scope="row">{{ $empleado->id}}</th>
                                <td>{{ $empleado->name}}</td>
                                <td>{{ $empleado->rut}}</td>
                            
                                @can('empleados.edit')  
                                <td><a class="btn btn-primary" href="/empleados/{{ $empleado->id}}/edit">Editar</a></td>
                            
                                @endcan

                                @can('empleados.destroy') 
                                <td>
                               
                                    {{ Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) }}
                                    {{ Form::submit('Eliminar', ['class' => 'btn btn-danger', 'onClick' => 'return confirm("¿Seguro desea eliminar este registro?");']) }}
                                    {{ Form::close() }}

                                </td>
                                @endcan
                            </tr>

                        @endforeach
                        
                        </tbody>
                        </table>
                  


@endsection





<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
$('#empleados55').DataTable();
} );

</script>
