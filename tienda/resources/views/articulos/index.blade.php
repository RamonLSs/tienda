@extends('plantillas.plantilla')
@section('titulo')
    Articulos S.A.

@endsection

@section('cabecera')
    Articulos Disponibles
@endsection

@section('contenido')

@if ($text=Session::get('mensaje'))
    <p class="alert alert-danger my-3">{{$text}}</p>
@endif
<div>
    <textarea name="area" id="10" cols="30" rows="10">Me da un fallo a la hora de crear los articulos, y es que cuando yo creo uno no guarda la categoria que le pongo, me lo pone en NULL y por eso cuando cambio a la pagina en la que se encuentra el articulo ocurre el fallo, no he conseguido solucionarlo </textarea>
    <form name="search" method="GET" action="{{route('articulos.index')}}"class="form-inline float-right">

        <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i>
    <select name="precio" class='form-control mr-2'>
        <option value="%">Todos</option>
        <option value="1">Menor de 20€</option>
        <option value="2">Entre 20 y 50€</option>
        <option value="3">Mayor de 50€</option>
    </select>
    <input type="submit" value="Buscar" class="btn btn-info ml-2">
    </form>
</div>
<a href="{{route('articulos.create')}}" class="btn btn-info mb-3"><i class="fa fa-plus"></i> Crear nuevo Articulo</a>
<table class="table table-hover table-dark">
    <thead>
      <tr class="bg-success">
        <th scope="col">Detalles</th>
        <th scope="col">Nombre</th>
        <th scope="col" >Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Categoria</th>
        <th scope="col text-center">Imagen</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
        <th scope="row" class="align-middle bg-dark"><a href="{{route('articulos.show', $articulo)}}" class="btn btn-success fa fa-address-card fa-2x"><i class=""></i></a></th>
        <td class="align-middle bg-dark">{{$articulo->nombre}}</td>
        <td class="align-middle bg-dark">{{$articulo->precio}}</td>
        <td class="align-middle bg-dark">{{$articulo->stock}}</td>
        <td class="align-middle bg-dark">{{$articulo->categoria->nombre}}</td>
        <td class="align-middle bg-dark"><img src="{{asset($articulo->imagen)}}" width="80px" height="80px" class="img-fluid rounded-circle"></td>
        <td class="align-middle bg-dark" style="white-space: nowrap">
        <form name="del" action="{{route('articulos.destroy', $articulo)}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" onclick="return confirm('¿Borrar Articulo?')" class="btn btn-danger fa fa-trash fa-2x"></button>
            <a href="{{route('articulos.edit',$articulo)}}" class="ml-2 fa fa-edit fa-2x btn btn-warning"></a>
        </form>
    </td>
        </tr>
        @endforeach
    </tbody>
  </table>
{{$articulos->appends(Request::except('page'))->links()}}
<a href="{{route('inicio')}}" class="btn btn-info ml-2">Volver a inicio</a>
@endsection
