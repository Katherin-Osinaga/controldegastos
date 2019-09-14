@extends('layout.layouts')
@section('title','Gasto')
@section('content')
<h2>Editar Gasto</h2> <br>
<form action="/gastos/{{ $gasto->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>Ingrese el nombre del gasto :</p>
    <input type="text" class="form-control" name="name_g" value="{{ $gasto->nombre_gasto }}"><br>
    <p>Ingrese la descripcion del gasto :</p>
    <input type="text" class="form-control" name="descripcion_g" value="{{ $gasto->descripcion_gasto }}"><br>
    <p>Ingrese la fecha del gasto :</p>
    <input type="text" class="form-control" name="fecha_g" value="{{ $gasto->fecha_gasto }}"><br>
    <p>Ingrese el monto del gasto :</p>
    <input type="text" class="form-control" name="monto_g" value="{{ $gasto->monto_gasto }}"><br>
    <button class="btn btn-primary">Actualizar Gasto</button>
</form>
@endsection