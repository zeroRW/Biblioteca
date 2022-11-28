@extends('template')
@section('codigo')

<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <div class="bg-white p-5 rounded">

          <h2 class="fw-bold text-center pt-2 mb-4 ">EDITAR AUTORES</h2>

          @if ($errors->any())

                @foreach ($errors->all() as $error)

                @endforeach

            @endif 
          
  
          <form class="form-signin" action="{{route('autor.update2', $consultaIDD->idAutores)}}" method="POST">

            @csrf
            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label for="text" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Empezando por apellidos..." value="{{$consultaIDD->nombre}}">
                <p class="fst-italic" style="color: red">
                    {{$errors->first('name')}}
                </p>
            </div>
                <div class="mb-4">
                    <label for="text" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento" value="{{$consultaIDD->fechaNacimiento}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('fechaNacimiento')}}
                    </p>
                </div>
                
                <div class="mb-4">
                    <label for="text" class="form-label">No. Libros publicados</label>
                    <input type="number" class="form-control" name="libros" value="{{$consultaIDD->librosPublicados}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('libros')}}
                    </p>
                </div>
            
                     
              <div class="d-grid">
                <a href="{{route('consulau.index2')}}" class="btn btn-success">Regresar</a>
                <br>
                <button type="submit" class="btn btn-warning">Actualizar Datos</button>
              </div>
          </form>
  
      </div>
    </div>
</div>

@endsection
