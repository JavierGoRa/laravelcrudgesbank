@extends('layouts.app')

@section('titulo')
    formulario crear cliente
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Añade un cliente</h1>
            <p class="lead">Rellena el formulario para crear un nuevo cliente</p>
            <h5>Cuenta: {{$cuenta->numCuenta}}<br>
                Saldo: {{$cuenta->saldo}}
            </h5>
        </div>
    </div>

@endsection

@section('content')
{{ Form::open(['route'=>'transactions.store','method'=>'post'])}}

    {{Form::hidden('account_id', $cuenta->id)}}

    <div class="form-group">
        {{Form::label('fechaHora','Fecha:')}}
        {{Form::date('fechaHora',old('fechaHora'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('tipo','Tipo de movimiento:')}}
        {{Form::select('tipo',['I' => 'Ingreso', 'R' => 'Reintegro'],null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Elige un tipo de movimiento'])}}
    </div>
    <div class="form-group">
        {{Form::label('cantidad','Cantidad:')}}
        {{Form::number('cantidad',old('cantidad'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <input class="btn btn-primary" type="submit">

{{ Form::close() }}

@endsection