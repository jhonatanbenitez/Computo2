@extends('layouts.plantillabase');

@section('contenido')
<a href="codigos/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo de estudiante</th>
            <th scope="col">Nombre de estudiante</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($codigos as $codigo)
        <tr>
            <td>{{ $codigo->id}}</td>
            <td>{{ $codigo->codigo de estudiante}}</td>
            <td>{{ $codigo->nombre de estudiante}}</td>
            <td>{{ $codigo->direccion}}</td>
            <td>{{ $codigo->telefono}}</td>
            <td>{{ $codigo->email}}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection