@extends('tipos_sangre.layout')

<!-- Contentido -->
@section('content')
<div class="card">
    <div class="card-header">
        Editar Registro
    </div>
    <div class="card-body">
        <form action="{{ url('tipos_sangre/' .$dato->id_tipo_sangre) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="col">
                <div class="mb-3">
                    <label for="sangre" class="form-label">Nombre *</label>
                    <input type="text" name="sangre" id="sangre" value="{{ $dato->sangre }}" class="form-control" placeholder="Ej: Tipo A" autofocus required>
                </div>
            </div>
            <button type="submit" class="btn btn-success col-12">Guardar</button>
        </form>
    </div>
</div>
@endsection
