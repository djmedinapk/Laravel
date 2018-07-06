@extends('admin.templates.main')

@section('title','Tags')

@section('buttons')
	<li class="nav-item">
        <a class="nav-link" href="{{route('tag.index')}}">Listado</a>
      </li>
	<li class="nav-item ">
        <a class="nav-link" href="{{route('tag.create')}}">Crear <span class="sr-only">h</span></a>
    </li>
@endsection

@section('content')
	{!! Form::open(array('route' => ['tag.update',$tag->id], 'method' => 'put')) !!}﻿
	<div class="form-group">
		{!! Form::label('name', 'Nombre'); !!}
		{!! Form::text('name', $tag->name,['class' => 'form-control','placeholder' => 'escriba el nombre del Tag']); !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Enviar',['class' => 'btn btn-dark btn-block']); !!}
	</div>   
	{!! Form::close() !!}
@endsection