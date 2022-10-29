<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/658c27c3ed.js" crossorigin="anonymous"></script>
    <title>Libreria</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3145/3145765.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css'])
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #0a141d;">
        <div class="container-fluid">
          <a class="navbar-brand fst-italic" style="color: white" href="#">BBLibrary</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="color: white" href="{{route('Inicio')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{route('form')}}">Registrar Libro</a>
              </li>
            </ul>
                <a href="/">
                    <button class="btn btn-primary " style="color: white" type="submit">LOG OUT</button>
                </a>
          </div>
        </div>
      </nav>


      
    @yield('codigo')

    <br>
    <footer class="pie-pagina">
      <div class="grupo1">
        <div class="box">
            <h2>BBLibrary</h2>
        </div>
        <div class="box">
          <h3>Sobre nosotros</h3>
          <p>Somos una biblioteca de libros en linea.</p>
          <p>29/10/2022</p>
        </div>
        <div class="box">
          <h3>Siguenos en</h3>
          <div class="red-social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
          </div>
        </div>
      </div>
      <div class="grupo2">
        <div class="box">
          <small>&copy; 2022 <b>BBLibrary</b> - Todos los Derechos Reservados.</small>  
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
