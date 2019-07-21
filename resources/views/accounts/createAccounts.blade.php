@extends('layouts.app')

@section('titulo')
    formulario crear cuenta
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Añade una cuenta</h1>
            <p class="lead">Rellena el formulario para crear una nueva cuenta</p>
        </div>
    </div>

@endsection

@section('content')
    {{ Form::open(['route'=>'accounts.store','method'=>'post'])}}

        <div class="form-group">
            {{Form::label('numCuenta','Numero de cuenta:')}}
            {{Form::text('numCuenta',old('numCuenta'),['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('client_id','Cliente:')}}
            {{Form::select('client_id',$cliente,null,['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Selecicone un cliente'])}}
        </div>
        <div class="form-group">
            {{Form::label('saldo','Saldo:')}}
            {{Form::number('saldo',old('saldo'),['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <input class="btn btn-primary" type="submit">

    {{ Form::close() }}
@endsection