@extends('plantillas.plantilla')
@section('titulo')
    Crear Categoria Nuevo
@endsection
@section('cabecera')
    Crear Categoria Nuevo
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
<form action="{{route('categorias.store')}}" name="c" method="POST">
    @csrf
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <input type="submit" value="Guardar" class="btn btn-success mr-3">
            <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
        <a href="{{route('categorias.index')}}" class="btn btn-info">Volver</a>
        </div>
    </div>
</form>
@endsection
