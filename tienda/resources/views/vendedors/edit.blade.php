@extends('plantillas.plantilla')
@section('titulo')Editar Articulo
@endsection
@section('cabecera')
Modificar Vendedor
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
<form name="c" method='POST' action="{{route('vendedors.update', $vendedor)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
      <div class="col">
      <input type="text" class="form-control" value='{{$vendedor->nombre}}' name='nombre' required>
      </div>

      <div class="col">
        <input type="text" class="form-control" value='{{$vendedor->apellidos}}' name='apellidos' required>
      </div>
    </div>
    <div class="form-row mt-3">
        <div class="col">
          <input type="text" class="form-control" value='{{$vendedor->edad}}' name='edad'>
        </div>
        <div class="col">
            <input type="text" class="form-control" value='{{$vendedor->ventas}}' name='ventas'>
          </div>
      </div>
      <div class="form-row mt-3">
        <div class="col">
        <img src="{{asset($vendedor->imagen)}}" width="40vw" height="40vh" class="rounded-circle mr-3">
            <b>Imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
        </div>
      </div>
      <div class="form-row mt-3">
        <div class="col">
            <input type='submit' value='Modificar' class='btn btn-success mr-3'>

            <a href={{route('vendedors.index')}} class='btn btn-info'>Volver</a>
        </div>
    </div>

  </form>
@endsection
