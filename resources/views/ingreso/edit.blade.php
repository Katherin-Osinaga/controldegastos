@extends('layout.layouts')
@section('title','Ingreso')
@section('content')
<h2>Editar Ingreso</h2> <br>
<form action="/ingresos/{{ $ingreso->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>Ingrese el nombre del ingreso :</p>
    <input type="text" class="form-control" name="name_i" value="{{ $ingreso->nombre_ingreso }}"><br>
    <p>Ingrese la descripcion del ingreso :</p>
    <input type="text" class="form-control" name="descripcion_i" value="{{ $ingreso->descripcion_ingreso }}"><br>
    <p>Ingrese la fecha del ingreso :</p>
    <input type="text" class="form-control" name="fecha_i" value="{{ $ingreso->fecha_ingreso }}"><br>
    <p>Ingrese el monto del ingreso :</p>
    <input type="text" class="form-control" name="monto_i" value="{{ $ingreso->monto_ingreso }}"><br>
    <button class="btn btn-primary">Actualizar Ingreso</button>
</form>
@endsection