@extends('admin.templates.main')

@section('title','Tags')

@section('buttons')
	<li class="nav-item">
        <a class="nav-link" href="{{route('tag.index')}}">Listado</a>
      </li>
	<li class="nav-item active">
        <a class="nav-link" href="{{route('tag.create')}}">Crear <span class="sr-only">h</span></a>
    </li>
@endsection

@section('content')
	{!! Form::open(['route' => 'tag.store','method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre'); !!}
		{!! Form::text('name', NULL,['class' => 'form-control','placeholder' => 'escriba el nombre de la categoria']); !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Enviar',['class' => 'btn btn-dark btn-block']); !!}
	</div>   
	{!! Form::close() !!}
@endsection