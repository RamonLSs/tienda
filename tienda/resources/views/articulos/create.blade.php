@extends('plantillas.plantilla')
@section('titulo')
    Crear Articulo Nuevo
@endsection
@section('cabecera')
    Crear Articulo Nuevo
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
<form action="{{route('articulos.store')}}" name="c" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Precio" name="precio" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Stock" name="stock" required>
        </div>
        <div class="col">
            <select name="categorias" class="form-control">
                @foreach ($categorias as $categoria)
                    @if ($categoria == $categoria)
            <option selected>{{$categoria->nombre}}</option>
            @else
            <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
            @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <b style="color:yellow">Imagen</b>&nbsp;<input type="file" name="imagen" accept="image/*">
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <input type="submit" value="Guardar" class="btn btn-success mr-3">
            <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
        <a href="{{route('articulos.index')}}" class="btn btn-info">Volver</a>
        </div>
    </div>
</form>
@endsection
