@extends('template')
@section('codigo')

<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <div class="bg-white p-5 rounded">

          <h2 class="fw-bold text-center pt-2 mb-4 ">EDITAR FORMULARIO</h2>

          @if ($errors->any())
            @foreach ($errors->all() as $error)
              
            @endforeach
          @endif

          
  
          <form class="form-signin" action="{{route('libro.update', $consultaID->idLibros)}}" method="POST">

            @csrf
            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label for="text" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="Titulo" value="{{$consultaID->titulo}}">
                <p class="fst-italic" style="color: red">
                    {{$errors->first('Titulo')}}
                </p>
            </div>
            <div class="gru1">
                <div class="mb-3">
                    <label for="text" class="form-label">ISBN</label>
                    <input type="number" class="form-control" name="isbn" value="{{$consultaID->ISBN}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('isbn')}}
                    </p>
                </div>
                <div class="mb-4">
                    <label for="text" class="form-label">Paginas</label>
                    <input type="number" class="form-control" name="Paginas" value="{{$consultaID->paginas}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Paginas')}}
                    </p>
                </div>   
            </div>

                <div class="mb-4">
                    <label for="text" class="form-label">Autor</label>
                    <select class="form-select" name="Autor" aria-label="Default select example">
                        @foreach ($categorias as $tb_autores)
                            <option value="{{$tb_autores['idAutores']}}">{{$tb_autores['nombre']}}</option>
                        @endforeach
                    
                    </select>
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Autor')}}
                    </p>
                </div>
                
                <div class="mb-4">
                    <label for="text" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="Edit" value="{{$consultaID->editorial}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Edit')}}
                    </p>
                </div>

                <div class="mb-4">
                    <label for="text" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email" value="{{$consultaID->email}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Email')}}
                    </p>
                </div>
            
                     
              <div class="d-grid">
                <a href="{{route('consuli.index')}}" class="btn btn-success">Regresar</a>
                <br>
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
              </div>
          </form>
  
      </div>
    </div>
</div>

@endsection
