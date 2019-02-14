@extends('template')

@section('titulo')
    Lista clientes
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home page</h1>
            <p class="lead">prueba</p>
        </div>
    </div>

@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="" class="navbar navbar-expand-lg navbar-light bg-light" role="button" aria-pressed="true">Nuevo cliente</a>
</nav>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->ciudad}}</td>
            <td>{{$cliente->email}}</td>
            <td>
                <div class="btn-group">
                <a href="{{route('clients.edit',$cliente->id)}}" class="btn btn-link" titles="editar"><i class="material-icons md-18">edit</i></a>
                <a href="{{route('clients.show',$cliente->id)}}" class="btn btn-link" titles="show"><i class="material-icons md-18">show</i></a>
                <a href="{{route('clients.destroy',$cliente->id)}}" class="btn btn-link" titles="delete"><i class="material-icons md-18">delete</i></a>
                </div>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection