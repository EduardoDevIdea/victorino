<style>
  .banner {
    background-color:  #002B53;
    top: 15px;
  }
 #banner-home {
     background-color: #B06F1A;
 }
 .carrosel-inner {
     max-height: 80px;
 }
 .carrosel-inner img {
     width: 100%;
     height: 10px;
 }
</style>

<div class="banner">
  <div class="space-banner">
    <div id="banner-home">
        {{-- Inicio Banner --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('images/foto1.jpeg')}}" height="74%" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/foto2.jpg')}}" height="74%" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/foto3.jpg')}}" height="74%" alt="Terceiro Slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </div>
        {{-- Fim banner --}}
    </div>
  </div>
</div>
