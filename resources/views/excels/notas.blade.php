<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Tiempo</th>
        <th>Nota</th>
        <th>Observación</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notas as $empleado)
        <tr>
            <th scope="row">{{ $empleado->name}}</th>
                <td>{{ $empleado->time}}</td>
                <td>{{ $empleado->note}}</td>
                <td>{{ $empleado->observation}}</td> 
              

                @if ($empleado->note > 70)
                <td>Aprobado</td>
            @else
            <td>Reprobado</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>