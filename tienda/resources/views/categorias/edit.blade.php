@extends('plantillas.plantilla')
@section('titulo')Editar Categoria
@endsection
@section('cabecera')
Modificar Categoria
@endsection
@section('contenido')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $miError)
            <li>{{$miError}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('categorias.update', $categoria)}}" name="c" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="col">
        <input type="text" class="form-control" value="{{$categoria->nombre}}" name="nombre" required>
        </div>
    </div>

    <div class="form-row mt-3">
        <input type="submit" value="Modificar" class="btn btn-success mr-3">
    <a href="{{route('categorias.index')}}" class="btn btn-info">Volver</a>
    </div>
</form>

@endsection
