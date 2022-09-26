@extends('estudiantes.layout')

<!-- Contentido -->
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    <div class="card-header d-flex justify-content-end">
        <button type="button" class="btn btn-success px-3" onclick="location.href=&quot;{{ url('/estudiantes/create') }}&quot;">Agregar Registro</button>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Carne</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tipo de Sangre</th>
                    <th scope="col">Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultado as $dato)
                <tr>
                    <td>{{ $dato->id_estudiante }}</td>
                    <td>{{ $dato->carne }}</td>
                    <td>{{ $dato->nombres }}</td>
                    <td>{{ $dato->apellidos }}</td>
                    <td>{{ ($dato->direccion ? $dato->direccion : "- - -") }}</td>
                    <td>{{ ($dato->telefono ? $dato->telefono : "- - -") }}</td>
                    <td>{{ ($dato->correo_electronico ? $dato->correo_electronico : "- - -") }}</td>
                    <td>{{ $dato->tipo_sangre->sangre }}</td>
                    <td>{{ date('d/m/Y', strtotime($dato->fecha_nacimiento)) }}</td>
                    <td>
                        <button type="button" class="btn btn-info px-3" onclick="location.href=&quot;{{ url('/estudiantes/'.$dato->id_estudiante) }}&quot;">Detalle</button>
                        &nbsp;
                        <button type="button" class="btn btn-primary px-3" onclick="location.href=&quot;{{ url('/estudiantes/'.$dato->id_estudiante.'/edit') }}&quot;">Editar</button>
                        &nbsp;
                        <form method="POST" action="{{ url('/estudiantes'.'/'.$dato->id_estudiante) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger px-3" onclick="return confirm('Esta seguro de eliminar el tipo de sangre?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection