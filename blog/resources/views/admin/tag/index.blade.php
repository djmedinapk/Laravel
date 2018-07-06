@extends('admin.templates.main')

@section('title','Tags')

@section('buttons')
  <li class="nav-item">
        <a class="nav-link active" href="{{route('tag.index')}}">Listado</a>
      </li>
  <li class="nav-item ">
        <a class="nav-link" href="{{route('tag.create')}}">Crear</a>
    </li>
@endsection

@section('content')
	<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Accion</th
    </tr>
  </thead>
  <tbody>
  	@foreach ($tags as $tag)
	  	<tr>
	      <th scope="row">{{$tag->id}}</th>
	      <td>{{$tag->name}}</td>
	      <td>
          <a href="{{route('tag.edit',$tag->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="{{route('tag.delete',$tag->id)}}" onclick="return confirm('¿Esta Seguro que desea eliminar el usuario?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
	    </tr>
  	@endforeach 
    
    
  </tbody>
</table>
<br>
{!!$tags->render();!!}
@endsection