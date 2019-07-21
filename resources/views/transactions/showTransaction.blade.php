@extends('layouts.app')

@section('titulo')
    Formulario Mostrar Movimiento
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Muestra el movimiento</h1>
            <p class="lead">Estos son los datos del movimiento elegido</p>
        </div>
    </div>

@endsection 

@section('content')

{{ Form::open ()}}
    <div class="form-group">
        {{Form::label('numMovimiento','Numero de movimiento:')}}
        {{Form::text('numMovimiento', $movimiento->numMovimiento, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('account_id','Id Cuenta:')}}
        {{Form::text('account_id', $movimiento->account_id, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('fechaHora','Fecha:')}}
        {{Form::text('fechaHora', $movimiento->fechaHora, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('tipo','Tipo de movimiento:')}}
        {{Form::text('tipo', $movimiento->tipo, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('concepto','Concepto:')}}
        {{Form::text('concepto', $movimiento->concepto, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('cantidad','Cantidad:')}}
        {{Form::text('cantidad', $movimiento->cantidad, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('saldo','Saldo:')}}
        {{Form::text('saldo', $movimiento->saldo, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <a href="javascript:history.go(-1)"> Volver </a>

{{ Form::close() }}
@endsection