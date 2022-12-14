@extends('template')
@section('codigo')


@if (session()->has('correcto')) 
        <script type="text/javascript">          
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Se guardo con exito el libro:',
                text: '{{session('ti')}}',
                showConfirmButton: false,
                timer: 1600
            })
        </script> 
@endif




<div class="container w-50 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <div class="bg-white p-5 rounded">

          <h2 class="fw-bold text-center pt-2 mb-4 ">Formulario</h2>

          @if ($errors->any())
            @foreach ($errors->all() as $error)
              
            @endforeach
          @endif

          
  
          <form class="form-signin" action="{{route('libro.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="text" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}">
                <p class="fst-italic" style="color: red">
                    {{$errors->first('Titulo')}}
                </p>
            </div>
            <div class="gru1">
                <div class="mb-3">
                    <label for="text" class="form-label">ISBN</label>
                    <input type="number" class="form-control" name="isbn" value="{{old('isbn')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('isbn')}}
                    </p>
                </div>
                <div class="mb-4">
                    <label for="text" class="form-label">Paginas</label>
                    <input type="number" class="form-control" name="Paginas" value="{{old('Paginas')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Paginas')}}
                    </p>
                </div>   
            </div>

                <div class="mb-4">
                    <label for="text" class="form-label">Autor</label>
                    <select class="form-select" name="Autor" aria-label="Default select example">
                        <option selected>Selecciona un autor...</option>
                        
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
                    <input type="text" class="form-control" name="Edit" value="{{old('Edit')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Edit')}}
                    </p>
                </div>

                <div class="mb-4">
                    <label for="text" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email" value="{{old('Email')}}">
                    <p class="fst-italic" style="color: red">
                        {{$errors->first('Email')}}
                    </p>
                </div>
            
                     
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
          </form>
  
      </div>
    </div>
</div>

@endsection
