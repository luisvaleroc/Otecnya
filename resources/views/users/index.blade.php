@extends('layouts.app')

@section('content')
@include('common.errors')
@include('common.success')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @can('users.show')
                               
                                <td><a class="button" style="font-size: 15px;" title="ver Usuario" href="{{ route('users.show', $user->id) }}">
                                    <span class="fas fa-eye fa-1x"></span>
                                    </a></a></td>
                               
                                {{-- <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td> --}}
                                @endcan
                                @can('users.edit')

                                <td><a class="button" style="font-size: 15px;" title="ver Usuario" href="{{ route('users.edit', $user->id) }}">
                                        <span class="fas fa-pencil-alt fa-1x"></span>
                                        </a></a></td>

                                {{-- <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td> --}}
                                @endcan
                                @can('users.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro deseas eliminar este usuario?');"   >
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection