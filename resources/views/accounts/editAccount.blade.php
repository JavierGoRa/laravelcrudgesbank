@extends('layouts.app')

@section('titulo')
    Formulario Actualizar Cuenta
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Actualiza una cuenta</h1>
            <p class="lead">Rellena el formulario para actualizar una cuenta ya existente</p>
        </div>
    </div>

@endsection 

@include('flash::message')

@section('content')
    {{ Form::open(['route' => ['accounts.update', $cuenta->id] , 'method'=>'put']) }}
        <div class="form-group">
            {{Form::label('numCuenta','Numero de cuenta:')}}
            {{Form::text('numCuenta', $cuenta->numCuenta,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('client_id','Cliente ID:')}}
            {{Form::text('client_id', $cuenta->client_id,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('saldo','Saldo:')}}
            {{Form::number('saldo', $cuenta->saldo,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">

    {{ Form::close() }}
@endsection