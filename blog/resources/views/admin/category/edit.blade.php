@extends('admin.templates.main')

@section('title','Categorias')

@section('buttons')
	<li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">Listado</a>
      </li>
	<li class="nav-item ">
        <a class="nav-link" href="{{route('category.create')}}">Crear <span class="sr-only">h</span></a>
    </li>
@endsection

@section('content')
	{!! Form::open(array('route' => ['category.update',$category->id], 'method' => 'put')) !!}﻿
	<div class="form-group">
		{!! Form::label('name', 'Nombre'); !!}
		{!! Form::text('name', $category->name,['class' => 'form-control','placeholder' => 'escriba el nombre de la categoria']); !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Enviar',['class' => 'btn btn-dark btn-block']); !!}
	</div>   
	{!! Form::close() !!}
@endsection