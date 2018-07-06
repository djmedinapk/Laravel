@extends('admin.templates.main')

@section('title','Usuario')

@section('buttons')
  <li class="nav-item">
        <a class="nav-link active" href="{{route('user.index')}}">Listado</a>
      </li>
  <li class="nav-item ">
        <a class="nav-link" href="{{route('user.create')}}">Crear</a>
    </li>
@endsection

@section('content')
	<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo</th>
      <th scope="col">Accion</th
    </tr>
  </thead>
  <tbody>
  	@foreach ($users as $user)
	  	<tr>
	      <th scope="row">{{$user->id}}</th>
	      <td>{{$user->name}}</td>
	      <td>{{$user->email}}</td>
	      @if($user->type=="admin")
	      	<td><span class="badge badge-primary">{{$user->type}}</span></td>

	      @else
	      	<td><span class="badge badge-success">{{$user->type}}</span></td>
	      @endif
	      <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>

          <a href="{{route('user.delete',$user->id)}}" onclick="return confirm('¿Esta Seguro que desea eliminar el usuario?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>

        </td>
	    </tr>
  	@endforeach 
    
    
  </tbody>
</table>
<br>
{!!$users->render();!!}
@endsection