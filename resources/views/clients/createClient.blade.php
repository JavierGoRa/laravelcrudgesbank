@extends('layouts.app')

@section('titulo')
    formulario crear cliente
@endsection

@section('cabecera')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Añade un cliente</h1>
            <p class="lead">Rellena el formulario para crear un nuevo cliente</p>
        </div>
    </div>

@endsection

@section('content')
{{ Form::open(['route'=>'clients.store','method'=>'post'])}}

    <div class="form-group">
        {{Form::label('nombre','Nombre:')}}
        {{Form::text('nombre',old('nombre'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('apellidos','Apellidos:')}}
        {{Form::text('apellidos',old('apellidos'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('ciudad','Ciudad:')}}
        {{Form::text('ciudad',old('ciudad'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('telefono','Telefono:')}}
        {{Form::text('telefono',old('telefono'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('dni','DNI:')}}
        {{Form::text('dni',old('dni'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="form-group">
        {{Form::label('email','Email:')}}
        {{Form::email('email',old('email'),['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <input class="btn btn-primary" type="submit">

{{ Form::close() }}
@endsection