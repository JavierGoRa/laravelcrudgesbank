@extends('layouts.app')

@section('titulo')
    Lista cuentas
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cuentas</h1>
            <p class="lead">Lista de los cuentas actuales en la base de datos</p>
        </div>
    </div>

@endsection

@include('flash::message')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    @if (Auth::user()->hasAnyRole(['admin']))
    <a href="{{url('/accounts/create')}}" class="navbar navbar-expand-lg navbar-light bg-light" role="button" aria-pressed="true">Nueva cuenta</a>

                    @else

                    @endif
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <form class="form-inline mt-2 mt-md-0" action="{{route('accounts.index')}}" methos="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">NumCuenta</th>
        <th scope="col">Client_id</th>
        <th scope="col">Fecha Alta</th>
        <th scope="col">Saldo</th>
        <th scope="col">Fecha Ultimo Mov</th>
        <th scope="col">Num Movimientos</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cuentas as $cuenta)
            <tr>
                <th scope="row">{{$cuenta->id}}</td>
                <td>{{$cuenta->numCuenta}}</td>
                <td>{{$cuenta->client_id}}</td>
                <td>{{$cuenta->fechaAlta}}</td>
                <td>{{$cuenta->saldo}}</td>
                <td>{{$cuenta->fechaUMov}}</td>
                <td>{{$cuenta->numMvtos}}</td>
                <td>
                    <div class="btn-group">

                    @if (Auth::user()->hasAnyRole(['admin']))
                    <a href="{{route('accounts.edit',$cuenta->id)}}" class="btn btn-link" titles="editar"><i class="material-icons md-18">edit</i></a>
                    @else
                    @endif
                    
                    <a href="{{route('accounts.show',$cuenta->id)}}" class="btn btn-link" titles="show"><i class="material-icons md-18">show</i></a>
                    
                    @if (Auth::user()->hasAnyRole(['admin']))
                    <a href="{{route('accounts.destroy',$cuenta->id)}}" class="btn btn-link" titles="delete"><i class="material-icons md-18">delete</i></a>
                    @else
                    @endif
                    
                    <a href="{{route('transactions.index',$cuenta->id)}}" class="btn btn-link" titles="delete"><i class="material-icons md-18">Cuenta</i></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <!--  -->
@endsection