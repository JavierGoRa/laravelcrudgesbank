@extends('layouts.app')

@section('titulo')
    Formulario Actualizar Cliente
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Muestra al cliente</h1>
            <p class="lead">Estos son los datos del cliente elegido</p>
        </div>
    </div>

@endsection 

@section('content')

{{ Form::open ()}}
<!-- {{ Form::open(['route' => ['accounts.update', $cuenta->id] , 'method'=>'put']) }} -->
        <div class="form-group">
            {{Form::label('numCuenta','Numero de cuenta:')}}
            {{Form::text('numCuenta', $cuenta->numCuenta,['class' => 'form-control', 'disabled', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('client_id','Cliente ID:')}}
            {{Form::text('client_id', $cuenta->client_id,['class' => 'form-control', 'disabled', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('saldo','Saldo:')}}
            {{Form::number('saldo', $cuenta->saldo,['class' => 'form-control', 'disabled', 'required' => 'required'])}}
        </div>
        <a href="javascript:history.go(-1)"> Volver </a>

{{ Form::close() }}
@endsection