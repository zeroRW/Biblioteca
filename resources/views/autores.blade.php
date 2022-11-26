@extends('template')
@section('codigo')


@if (session()->has('hecho'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>El Autor: {{session('ti')}} </strong> Guardado exitosament
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <div class="bg-white p-5 rounded">

          <h2 class="fw-bold text-center pt-2 mb-4 ">REGISTRO AUTORES</h2>

          @if ($errors->any())

                @foreach ($errors->all() as $error)

                @endforeach

            @endif 
          
  
          <form class="form-signin" action="guardarAutor" method="POST">

            @csrf

            <div class="mb-3">
                <label for="text" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Empezando por apellidos..." value="{{old('name')}}">
                <p class="fst-italic" style="color: red">
                    {{$errors->first('name')}}
                </p>
            </div>
                <div class="mb-4">
                    <label for="text" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fechaNacimiento" value="{{old('fechaNacimiento')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('fechaNacimiento')}}
                    </p>
                </div>
                
                <div class="mb-4">
                    <label for="text" class="form-label">No. Libros publicados</label>
                    <input type="number" class="form-control" name="libros" value="{{old('libros')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('libros')}}
                    </p>
                </div>
            
                     
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar Autor</button>
              </div>
          </form>
  
      </div>
    </div>
</div>

@endsection

