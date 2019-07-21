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
    <div class="form-group">
        {{Form::label('nombre','Nombre:')}}
        {{Form::text('nombre', $cliente->nombre, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('apellidos','Apellidos:')}}
        {{Form::text('apellidos', $cliente->apellidos, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('ciudad','Ciudad:')}}
        {{Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('telefono','Telefono:')}}
        {{Form::text('telefono', $cliente->telefono, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('dni','DNI:')}}
        {{Form::text('dni', $cliente->dni, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('email','Email:')}}
        {{Form::text('email', $cliente->email, ['class' => 'form-control', 'disabled', 'required' => 'required'])}}
    </div>
    <a href="javascript:history.go(-1)"> Volver </a>

{{ Form::close() }}
@endsection