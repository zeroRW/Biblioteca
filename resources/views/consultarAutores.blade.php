@extends('template')
@section('codigo')
  
@if (session()->has('actualizar'))
    {!!
    " <script> Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Autor actualizado',
  showConfirmButton: false,
  timer: 1500
}) </script>"
    !!}
@endif

@if (session()->has('eliminado'))
    {!!
    " <script> Swal.fire({
  position: 'top-center',
  icon: 'info',
  title: 'Autor eliminado de la base de datos',
  showConfirmButton: false,
  timer: 1500
}) </script>"
    !!}
@endif

<h1 class="displat mb-5 mt-4 text-center"> CONSULTAR AUTORES </h1>
    
    <div class="conteiner col-md-8 offset-md-2">

      <table class="table table-dark text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Libros Publicados</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>

        @foreach ($ConsultaAA as $consultaa)

        <tbody>
          <tr>
            <th scope="row">{{$consultaa->idAutores}}</th>
            <td>{{$consultaa->nombre}}</td>
            <td>{{$consultaa->fechaNacimiento}}</td>
            <td>{{$consultaa->librosPublicados}}</td>
            <td>
              <a href="{{route('autor.edit2',$consultaa->idAutores)}}" class="btn btn-outline-success">Editar</a>

              <a href="{{route('autor.eliminar',$consultaa->idAutores)}}" class="btn btn-outline-danger">Eliminar</a>
            </td>
          </tr>
        </tbody>

        @endforeach

      </table>
        
    </div>

@endsection
