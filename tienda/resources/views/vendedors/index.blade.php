@extends('plantillas.plantilla')
@section('titulo')
    Vendedores S.A.

@endsection

@section('cabecera')
    Vendedores Disponibles

@endsection

@section('contenido')

@if ($text=Session::get('mensaje'))
    <p class="alert alert-danger my-3">{{$text}}</p>
@endif
<div class="container">
<a href="{{route('vendedors.create')}}" class="btn btn-info mb-3"><i class="fa fa-plus"></i> Crear nuevo Vendedor</a>
<form name="search" method="GET" action="{{route('vendedors.index')}}"class="form-inline float-right">

     <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i>

{{-- <select name="nombre" class='form-control mr-2'>
    <option value="%">Todos</option>
    @foreach ($vendedores as $nombre)
@if ($nombre==$request->nombre)
<option selected>{{$nombre}}</option>
@else
<option>{{$nombre}}</option>
@endif
    @endforeach
</select> --}}




<input type="submit" value="Buscar el que mas ha vendido" class="btn btn-info ml-2">
</form>
</div>

<table class="table table-hover table-dark">
    <thead>
      <tr class="bg-success">
        <th scope="col">Detalles</th>
        <th scope="col">Nombre</th>
        <th scope="col" >Apellidos</th>
        <th scope="col">Edad</th>
        <th scope="col">Ventas</th>
        <th scope="col text-center">Imagen</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($vendedores as $vendedor)
        <tr>
        <th scope="row" class="align-middle bg-dark"><a href="{{route('vendedors.show', $vendedor)}}" class="btn btn-success fa fa-address-card fa-2x"><i class=""></i></a></th>
        <td class="align-middle bg-dark">{{$vendedor->nombre}}</td>
        <td class="align-middle bg-dark">{{$vendedor->apellidos}}</td>
        <td class="align-middle bg-dark">{{$vendedor->edad}}</td>
        <td class="align-middle bg-dark">{{$vendedor->ventas}}</td>
        <td class="align-middle bg-dark"><img src="{{asset($vendedor->imagen)}}" width="80px" height="80px" class="img-fluid rounded-circle"></td>
        <td class="align-middle bg-dark" style="white-space: nowrap">
        <form name="del" action="{{route('vendedors.destroy', $vendedor)}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" onclick="return confirm('¿Borrar Vendedor?')" class="btn btn-danger fa fa-trash fa-2x"></button>
            <a href="{{route('vendedors.edit',$vendedor)}}" class="ml-2 fa fa-edit fa-2x btn btn-warning"></a>
        </form>
    </td>
        </tr>
        @endforeach
    </tbody>
  </table>
{{$vendedores->appends(Request::except('page'))->links()}}
<div>
<a href="{{route('inicio')}}" class="btn btn-info ml-2">Volver a inicio</a>
</div>
@endsection
