@extends('tipos_sangre.layout')

<!-- Contentido -->
@section('content')
<div class="card">
    <div class="card-header">
        Detalle del Registro
    </div>
    <div class="card-body">
        <div class="col">
            <div class="mb-3">
                <label for="sangre" class="form-label">Nombre</label>
                <input type="text" name="sangre" id="sangre" value="{{ $dato->sangre }}" class="form-control" disabled>
            </div>
        </div>
    </div>
</div>
@endsection
