@extends('estudiantes.layout')

<!-- Contentido -->
@section('content')
<div class="card">
    <div class="card-header">
        Editar Registro
    </div>
    <div class="card-body">
        <form action="{{ url('estudiantes/' .$dato->id_estudiante) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="col">
                <div class="mb-3">
                    <label for="carne" class="form-label">Carne *</label>
                    <input type="text" pattern="E[0-9]{3}" name="carne" id="carne" value="{{ $dato->carne }}" class="form-control" placeholder="Ej: E001" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres *</label>
                    <input type="text" name="nombres" id="nombres" value="{{ $dato->nombres }}" class="form-control" placeholder="Ej: Donal Obed" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos *</label>
                    <input type="text" name="apellidos" id="apellidos" value="{{ $dato->apellidos }}" class="form-control" placeholder="Ej: Morales Reyes" required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" name="direccion" id="direccion" value="{{ $dato->direccion }}" class="form-control" placeholder="Ej: Ciudad">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" name="telefono" id="telefono" value="{{ $dato->telefono }}" class="form-control" placeholder="Ej: 00000000">
                </div>
                <div class="mb-3">
                    <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                    <input type="email" name="correo_electronico" id="correo_electronico" value="{{ $dato->correo_electronico }}" class="form-control" placeholder="Ej: x@y.z">
                </div>
                <div class="mb-3">
                    <label for="id_tipo_sangre" class="form-label">Tipo de Sangre *</label>
                    <select class="form-control" name="id_tipo_sangre" id="id_tipo_sangre" required>
                        @foreach($tipos_sangre as $ts)
                        <option id="{{ $ts->id_tipo_sangre }}" value="{{ $ts->id_tipo_sangre }}" {{ ($ts==$dato->tipo_sangre?'selected':'') }}>{{ $ts->sangre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento *</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ date('Y-m-d', strtotime($dato->fecha_nacimiento)) }}" class="form-control" placeholder="Ej: YYYY-MM-DD" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success col-12">Guardar</button>
        </form>
    </div>
</div>
@endsection