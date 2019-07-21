@extends('layouts.app')

@section('titulo')
    Formulario Actualizar Cliente
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Actualiza un cliente</h1>
            <p class="lead">Rellena el formulario para actualizar un cliente ya existente</p>
        </div>
    </div>

@endsection 

@include('flash::message')

@section('content')
    {{ Form::open(['route' => ['clients.update', $cliente->id] , 'method'=>'put']) }}
        <div class="form-group">
            {{Form::label('nombre','Nombre:')}}
            {{Form::text('nombre', $cliente->nombre, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('apellidos','Apellidos:')}}
            {{Form::text('apellidos', $cliente->apellidos, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('ciudad','Ciudad:')}}
            {{Form::text('ciudad', $cliente->ciudad, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('telefono','Telefono:')}}
            {{Form::text('telefono', $cliente->telefono, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('dni','DNI:')}}
            {{Form::text('dni', $cliente->dni, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email:')}}
            {{Form::text('email', $cliente->email, ['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <input class="btn btn-primary" type="submit" value="Actualizar">

    {{ Form::close() }}
@endsection