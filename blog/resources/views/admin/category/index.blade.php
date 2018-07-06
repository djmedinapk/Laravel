@extends('admin.templates.main')

@section('title','Categorias')

@section('buttons')
  <li class="nav-item">
        <a class="nav-link active" href="{{route('category.index')}}">Listado</a>
      </li>
  <li class="nav-item ">
        <a class="nav-link" href="{{route('category.create')}}">Crear</a>
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
  	@foreach ($categories as $category)
	  	<tr>
	      <th scope="row">{{$category->id}}</th>
	      <td>{{$category->name}}</td>
	      <td>
          <a href="{{route('category.edit',$category->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="{{route('category.delete',$category->id)}}" onclick="return confirm('¿Esta Seguro que desea eliminar el usuario?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
	    </tr>
  	@endforeach 
    
    
  </tbody>
</table>
<br>
{!!$categories->render();!!}
@endsection