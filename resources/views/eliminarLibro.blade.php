@extends('template')
@section('codigo')

<div class="container w-50 mt-5 rounded shadow">

  <div class="row align-items-stretch">
    <div class="bg-white p-5 rounded">

        <h2 class="fw-bold text-center pt-2 mb-4 ">ELIMINAR LIBRO</h2>

        <div class="alert alert-danger col-md-10 offset-md-1 text-center" role="alert">
          <strong>
              ¿Esta seguro de eliminar este Libro? No se podra consultar nuevamente.   
          </strong>
        </div>
        
        
        <form class="form-signin" action="{{route('libro.destroy2', $consultaEL2->idLibros)}}" method="POST">

          @csrf
          {!!method_field('delete')!!}
          
          <div class="mb-3">
              <label for="text" class="form-label"><Strong>Titulo: </Strong> {{$consultaEL2->titulo}}</label>
          </div>
          <div class="gru1">
              <div class="mb-3">
                  <label for="text" class="form-label"><Strong>ISBN: </Strong> {{$consultaEL2->ISBN}}</label>
              </div>
              <div class="mb-4">
                  <label for="text" class="form-label"><Strong>Paginas: </Strong> {{$consultaEL2->paginas}}</label>
              </div>   
          </div>

              <div class="mb-4">
                  <label for="text" class="form-label"><Strong>Autor: </Strong> {{$consultaEL2->autor_id}}</label>
              </div>
              
              <div class="mb-4">
                  <label for="text" class="form-label"><Strong>Editorial: </Strong> {{$consultaEL2->editorial}}</label>
              </div>

              <div class="mb-4">
                  <label for="text" class="form-label"><Strong>Gmail: </Strong> {{$consultaEL2->email}}</label>
              </div>
          
                   
            <div class="d-grid">
              <a href="{{route('consuli.index')}}" class="btn btn-success">Regresar</a>
              <br>
              <button type="submit" class="btn btn-danger">Eliminar Datos</button>
            </div>
        </form>

    </div>
  </div>
</div>

@endsection
