@extends('template')
@section('codigo')
  
<h1 class="display mb-5 mt-4 text-center"> CONSULTAR LIBROS </h1>
    
<div class="conteiner col-md-8 offset-md-2">

  <table class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">ISBN</th>
        <th scope="col">Paginas</th>
        <th scope="col">Autor</th>
        <th scope="col">Editorial</th>
        <th scope="col">Email</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>

    @foreach ($ConsultaRec as $consulta)

    <tbody>
      <tr>
        <th scope="row">{{$consulta->idLibros}}</th>
        <td>{{$consulta->titulo}}</td>
        <td>{{$consulta->ISBN}}</td>
        <td>{{$consulta->paginas}}</td>
        <td>{{$consulta->autor_id}}</td>
        <td>{{$consulta->editorial}}</td>
        <td>{{$consulta->email}}</td>
        <td>
          <a href="{{route('libro.edit',$consulta->idLibros)}}" class="btn btn-outline-success">Editar</a>

          <a href="" class="btn btn-outline-danger">Eliminar</a>
        </td>
      </tr>
    </tbody>

    @endforeach

  </table>
  
  

</div>

@endsection
