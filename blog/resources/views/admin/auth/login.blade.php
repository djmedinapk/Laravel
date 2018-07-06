@extends('admin.templates.login.index')

@section('content')
<div class="col col-md-4 mr-auto ml-auto bg-light p-4 formulario  ">
    <h3>Ingresar ADPanel</h3>
    <hr>
      @include('admin.templates.partials.errors')
    {!! Form::open(['route' => 'admin.auth.login','method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('email', 'Correo'); !!}
            {!! Form::email('email', NULL,['class' => 'form-control','placeholder' => 'example@mail.com']); !!}
            
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña'); !!}
            {!! Form::password('password', ['class' => 'form-control','placeholder' => '************']); !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Ingresar',['class' => 'btn btn-dark btn-block']); !!}
        </div>   
    {!! Form::close() !!}
</div>
    

@endsection