@extends('tipos_sangre.layout')

<!-- Contentido -->
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    <div class="card-header d-flex justify-content-end">
        <button type="button" class="btn btn-success px-3" onclick="location.href=&quot;{{ url('/tipos_sangre/create') }}&quot;">Agregar Registro</button>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultado as $dato)
                <tr>
                    <td>{{ $dato->id_tipo_sangre }}</td>
                    <td>{{ $dato->sangre }}</td>
                    <td>
                        <button type="button" class="btn btn-info px-3" onclick="location.href=&quot;{{ url('/tipos_sangre/'.$dato->id_tipo_sangre) }}&quot;">Detalle</button>
                        &nbsp;
                        <button type="button" class="btn btn-primary px-3" onclick="location.href=&quot;{{ url('/tipos_sangre/'.$dato->id_tipo_sangre.'/edit') }}&quot;">Editar</button>
                        &nbsp;
                        <form method="POST" action="{{ url('/tipos_sangre'.'/'.$dato->id_tipo_sangre) }}" accept-charset="UTF-8" style="display:inline">
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
