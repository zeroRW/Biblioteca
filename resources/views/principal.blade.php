@extends('template')
@section('codigo')

<!--SLIDER-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://blogs.iadb.org/conocimiento-abierto/wp-content/uploads/sites/10/2022/04/Libros-sobre-conocimiento-abierto-en-acceso-abierto_ES_Working.jpg" class="d-block w-100" width="380" height="600" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://www.eleconomista.com.mx/__export/1638755135779/sites/eleconomista/img/2021/12/05/fil-guadajalara-2021-cortesia-xeva-becerrra.png_554688468.png" class="d-block w-100" width="380" height="600" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br>


  <section>
    <div class="container text-center">
        <div class="row align-items-center selft-aling-center">
          <div class="col mb-3">
            <div class="card text-bg-dark" style="max-width: 37rem;">
                <img src="https://www.elsoldemexico.com.mx/cultura/qid1m2-laura-esquivel.jpg/alternates/LANDSCAPE_480/Laura%20Esquivel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><strong>Laura Esquivel revive utopias</strong></h5>
                  <p class="card-text">La escritora habla de Lo que vi, su biografía interactiva que incluye códigos QR para escuchar su vos en distintas etapas.</p>
                  <p class="card-text">Laura Esquivel comenzo a escribir sus memorias a traves de una plataforma digital de "micromecenazgo"</p>
                  <a href="https://www.elsoldemexico.com.mx/cultura/literatura/laura-esquivel-revive-utopias-9109407.html" class="btn btn-primary">Ver noticia</a>
                </div>
              </div>
          </div>
          <div class="col">
            <section>
                    <div class="card text-bg-dark w-80">
                    <div class="card-body">
                      <h5 class="card-title"><strong>La verdadera historia de Pinocho, el cuento clásico italiano que popularizó Disney</strong></h5>
                      <p class="card-text">Pinocho comparte la paradoja de personajes como Drácula, Mary Poppins o James Bond, que son conocidos gracias a famosas adaptaciones cinematográficas, pero cuyas historias han sido leídas por muy pocos..</p>
                      <a href="https://www.bbc.com/mundo/noticias-internacional-62812129" class="btn btn-primary">Ver noticia</a>
                    </div>
                  </div>
                  <br>
                  <div class="card text-bg-dark w-80">
                    <div class="card-body">
                      <h5 class="card-title"><strong>“Revolución”: una novela para entrar con la frente en alto al Tenampa</strong></h5>
                      <p class="card-text">Arturo Pérez-Reverte hace “el balance final” de lo que ha aprendido de México en más de 20 años y nos regala su novela más autobiográfica sin serlo.</p>
                      <a href="https://www.eleconomista.com.mx/arteseideas/Revolucion-una-novela-para-entrar-con-la-frente-en-alto-al-Tenampa-20221026-0020.html" class="btn btn-primary">Ver noticia</a>
                    </div>
                  </div>
                  <br>
                  <div class="card text-bg-dark w-80">
                    <div class="card-body">
                      <h5 class="card-title"><strong>La poesía que más extrañaremos de David Huerta</strong></h5>
                      <p class="card-text">El poeta, ganador del Premio Xavier Villaurrutia, el Premio Nacional de Ciencias y Artes.</p>
                      <a href="https://www.eleconomista.com.mx/arteseideas/La-poesia-que-mas-extranaremos-de-David-Huerta-20221003-0137.html" class="btn btn-primary">Ver noticia</a>
                    </div>
                  </div>
            </section> 
          </div>
        </div>
  </section>

  

@endsection
