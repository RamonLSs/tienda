@extends('plantillas.plantilla')
@section('titulo')
    Crear Vendedor Nuevo
@endsection
@section('cabecera')
    Crear Vendedor Nuevo
@endsection
@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $miError)
                <li>{{$miError}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('vendedors.store')}}" name="c" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" name="edad" required>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Ventas" name="ventas" required>
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <b>Imagen</b>&nbsp;<input type="file" name="imagen" accept="
            image/*">
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <input type="submit" value="Guardar" class="btn btn-success mr-3">
            <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
        <a href="{{route('vendedors.index')}}" class="btn btn-info">Volver</a>
        </div>
    </div>
</form>
@endsection
