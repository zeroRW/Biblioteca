@extends('template')
@section('codigo')

<div class="container w-50 mt-5 rounded shadow">

    <div class="row align-items-stretch">
      <div class="bg-white p-5 rounded">

          <h2 class="fw-bold text-center pt-2 mb-4 ">ELIMINAR AUTOR</h2>

          <div class="alert alert-danger col-md-10 offset-md-1 text-center" role="alert">
            <strong>
                ¿Esta seguro de eliminar este Autor? No se podra consultar nuevamente.   
            </strong>
          </div>
          
          
          <form class="form-signin" action="{{route('autor.destroy', $consultaEL->idAutores)}}" method="POST">

            @csrf
            {!!method_field('delete')!!}

            <div class="mb-3">
                <label for="text" class="form-label"><Strong>Nombre: </Strong> {{$consultaEL->nombre}}</label>
            </div>
                <div class="mb-4">
                    <label for="text" class="form-label"><Strong>Fecha de Nacimiento: </Strong> {{$consultaEL->fechaNacimiento}}</label>
                </div>
                
                <div class="mb-4">
                    <label for="text" class="form-label"><Strong>Numero de libros publicados: </Strong> {{$consultaEL->librosPublicados}}</label>
                </div>
            
                     
              <div class="d-grid">
                <a href="{{route('consulau.index2')}}" class="btn btn-success">Regresar</a>
                <br>
                <button type="submit" class="btn btn-danger">Eliminar Autor</button>
              </div>
          </form>
  
      </div>
    </div>
</div>

@endsection
