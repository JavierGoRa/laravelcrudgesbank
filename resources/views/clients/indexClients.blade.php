@extends('layouts.app')

@section('titulo')
    Lista clientes
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Clientes</h1>
            <p class="lead">Lista de los clientes actuales en la base de datos</p>
        </div>
    </div>

@endsection

@include('flash::message')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if (Auth::user()->hasAnyRole(['admin']))
        <a href="{{url('/clients/create')}}" class="navbar navbar-expand-lg navbar-light bg-light" role="button" aria-pressed="true">Nuevo cliente</a>
        <a href="{{url('/pdf/clients')}}" class="navbar navbar-expand-lg navbar-light bg-light" role="button" aria-pressed="true">Imprimir clientes</a>

        @else

        @endif
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <form class="form-inline mt-2 mt-md-0" action="{{route('clients.index')}}" methos="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
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
                    @if (Auth::user()->hasAnyRole(['admin']))
                    <a href="{{route('clients.edit',$cliente->id)}}" class="btn btn-link" titles="editar"><i class="material-icons md-18">edit</i></a>

                    @else

                    @endif

                    <a href="{{route('clients.show',$cliente->id)}}" class="btn btn-link" titles="show"><i class="material-icons md-18">show</i></a>
                    @if (Auth::user()->hasAnyRole(['admin']))
                    <a href="{{route('clients.destroy',$cliente->id)}}" class="btn btn-link" titles="delete"><i class="material-icons md-18">delete</i></a>

                    @else

                    @endif
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <!--  -->
@endsection