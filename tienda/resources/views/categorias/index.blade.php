@extends('plantillas.plantilla')
@section('titulo')
    Categorias
@endsection
@section('cabecera')
    Categorias Disponibles
@endsection
@section('contenido')
    @if ($texto=Session::get('mensaje'))
        <p class="alert alert-success my-3">{{$texto}}</p>
    @endif

<a href="{{route('categorias.create')}}" class="btn btn-info mb-3"><i class="fa fa-plus"></i> Crear nuevo Categoria</a>
<table class="table table-hover table-dark">
    <thead>
        <tr class="bg-success">
            <th scope="col">Detalles</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
        <th scope="row" class="align-middle bg-dark"><a href="{{route('categorias.show', $categoria)}}" class="btn btn-success fa fa-address-card fa-2x"><i class=""></i></a></th>
        <td class="align-middle bg-dark">{{$categoria->nombre}}</td>
        <td class="align-middle bg-dark" style="white-space: nowrap">
        <form name="del" action="{{route('categorias.destroy', $categoria)}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" onclick="return confirm('¿Borrar Categoria?')" class=" btn btn-danger fa fa-trash fa-2x"></button>
        <a href="{{route('categorias.edit', $categoria)}}" class="ml-2 fa fa-edit fa-2x btn btn-warning"></a>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$categorias->appends(Request::except('page'))->links()}}
<a href="{{route('inicio')}}" class="btn btn-info ml-2">Volver a inicio</a>
@endsection
