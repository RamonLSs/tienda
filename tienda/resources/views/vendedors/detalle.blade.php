@extends('plantillas.plantilla')
@section('titulo')
    Detalle Vendedor
@endsection
@section('cabecera')
Informacion sobre:  <i><b>{{($vendedor->nombre)}} {{$vendedor->apellidos}}</b></i>
@endsection
@section('contenido')
<span class="clearfix"></span>
<div class="card text-white bg-info mt-5 mx-auto" style="max-width: 48rem">
<div class="card-header text-center"><b>{{($vendedor->nombre)}}</b></div>
<div class="card-body" style="font-size: 1.1em">
<h5 class="card-title text-center">{{($vendedor->nombre)}}</h5>
<p class="card-text">
    <div class="float-right"><img src="{{asset($vendedor->imagen)}}" width="160px" height="160px" class="rounded-circle"></div>
    <p><b>Nombre: </b>{{$vendedor->nombre}}</p>
    <p><b>Apellidos: </b>{{$vendedor->apellidos}}</p>
    <p><b>Edad: </b>{{$vendedor->edad}}</p>
    <p><b>Ventas: </b>{{$vendedor->ventas}}</p>
</p>
<a href="{{route('vendedors.index')}}" class="float-right btn btn-success">Volver</a>
</div>
</div>

@endsection
