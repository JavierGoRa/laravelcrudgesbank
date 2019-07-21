

@extends('layouts.app')

@section('titulo')
    Lista movimientos
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Movimientos</h1>
            <h5>Cuenta: {{$cuenta->numCuenta}}<br>
                Saldo: {{$cuenta->saldo}}
            </h5>
        </div>
    </div>

@endsection

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{route('transactions.create',$cuenta->id)}}" class="navbar navbar-expand-lg navbar-light bg-light" role="button" aria-pressed="true">Nuevo Movimiento</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
    </nav>

    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">NumMovimiento</th>
        <th scope="col">Cuenta_Id</th>
        <th scope="col">Fecha Hora</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Concepto</th>
        <th scope="col">Saldo</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movimientos as $movimiento)
            <tr>
                <th scope="row">{{$movimiento->id}}</td>
                <td>{{$movimiento->numMovimiento}}</td>
                <td>{{$movimiento->account_id}}</td>
                <td>{{$movimiento->fechaHora}}</td>
                <td>{{$movimiento->tipo}}</td>
                <td>{{$movimiento->concepto}}</td>
                <td>{{$movimiento->cantidad}}</td>
                <td>{{$movimiento->saldo}}</td>

                <td>
                    <div class="btn-group">
                        <a href="{{route('transactions.show',$movimiento->id)}}" class="btn btn-link" titles="show"><i class="material-icons md-18">show</i></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <!--  -->
@endsection