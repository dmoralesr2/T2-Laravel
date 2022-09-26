@extends('estudiantes.layout')

<!-- Contentido -->
@section('content')
<div class="card">
    <div class="card-header">
        Detalle del Registro
    </div>
    <div class="card-body">
        <div class="col">
            <div class="mb-3">
                <label for="carne" class="form-label">Carne</label>
                <input type="text" name="carne" id="carne" value="{{ $dato->carne }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" name="nombres" id="nombres" value="{{ $dato->nombres }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" value="{{ $dato->apellidos }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" name="direccion" id="direccion" value="{{ $dato->direccion }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" name="telefono" id="telefono" value="{{ $dato->telefono }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                <input type="text" name="correo_electronico" id="correo_electronico" value="{{ $dato->correo_electronico }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="id_tipo_sangre" class="form-label">Tipo de Sangre</label>
                <input type="text" name="id_tipo_sangre" id="id_tipo_sangre" value="{{ $dato->tipo_sangre->sangre }}" class="form-control" disabled>
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ date('Y-m-d', strtotime($dato->fecha_nacimiento)) }}" class="form-control" disabled>
            </div>
        </div>
    </div>
</div>
@endsection