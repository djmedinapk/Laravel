@extends('admin.templates.main')

@section('title','Usuario')

@section('buttons')
	<li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">Listado</a>
      </li>
	<li class="nav-item active">
        <a class="nav-link" href="{{route('user.create')}}">Crear <span class="sr-only">h</span></a>
    </li>
@endsection

@section('content')
	
	{!! Form::open(['route' => 'user.store','method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre'); !!}
		{!! Form::text('name', NULL,['class' => 'form-control','placeholder' => 'escriba su nombre']); !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico'); !!}
		{!! Form::text('email', NULL,['class' => 'form-control','placeholder' => 'ejemplo@mail.com']); !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Contraseña'); !!}
		{!! Form::password('password',['class' => 'form-control','placeholder' => '**********']); !!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'Tipo'); !!}
		{!! Form::select('type', ['member'=>'Miembro', 'admin'=>'Administrador'], null,['class'=>'form-control']); !!}﻿
	</div>
	
	<div class="form-group">
		{!! Form::submit('Enviar',['class' => 'btn btn-dark btn-block']); !!}
	</div>   
	{!! Form::close() !!}
@endsection