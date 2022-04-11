@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/codigos" method="POST">
<div class="mb-3">
    <label for="" class="form-label">Codigo de estudiante</label>
    <input id="codigo de estudiante" name="codigo de estudiante" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre de estudiante</label>
    <input id="nombre de estudiante" name="nombre de estudiante" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="text" class="form-control" tabindex="1">
</div>
<a href="/codigos" class="btn btn-secundary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection