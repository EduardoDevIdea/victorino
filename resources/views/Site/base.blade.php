<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Victoriano Odontologia Especializada</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/385c7d7d19.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>

</head>
<style>
   .cabecalho {
       background: #231F20;
       display: inline-flex;
       align-items: center;
       justify-content: center;
       width: 100%;
       padding: 15px;
   }
   .cabecalho a {
       color: white;
   }
   a:hover{
       color: #B06F1A;
   }
   .tooth {
       width: 80px;
       height: 80px;
       border: 1px solid black;
       border-radius: 80px;
       display: inline-flex;
       justify-content: center;
       align-items: center;
       z-index: 1000;
       background-color: black;
   }
   .text_services {
       display: inline-flex;
       justify-content: center;
       align-items: center;
       margin-left: 20px;
   }
   .card_services {
       border: 1px solid red;
   }
   .card-base > .card-icon {
        text-align: center;
        position: relative;
    }

.imagecard { 
    z-index: 2;
    display: block;
    position: relative;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 0 auto;
    color: white;
}
.card-base > .card-icon > .card-data {
    margin-top: -24px;
    background: ghostwhite;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    padding: 15px 0 0 0;
     box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    min-height: 100px;
    }
    #widgetCardIcon {
        background: #bb7824 !important;
        font-size: 28px;
        line-height: 78px;
    }
    
</style>
<body>
    <header class="cabecalho">
        <div class="row container">
            <div class="col-md-4">
                <nav class="nav justify-content-start">
                    <img src="{{asset('images/Screenshot_4.png')}}" alt="" width="120px" height="80px">
                  </nav>
            </div>
            <div class="col-md-8">
                <nav class="nav justify-content-end menu_text">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">Sobre</a>
                    <a class="nav-link" href="#">Especialidades</a>
                    <a class="nav-link" href="#">Espaço</a>
                    <a class="nav-link" href="#">Corpo Clinico</a>
                    <a class="nav-link" href="#">Contato</a>
                    <a class="nav-link" href="#">Blog</a>
                  </nav>
            </div>
        </div>
    </header>
    <section class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/Screenshot_2.png')}}" alt="Primeiro Slide" width="1920px" height="300px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/Screenshot_4.png')}}" alt="Segundo Slide" width="1920px" height="300px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/victorino.png')}}" alt="Terceiro Slide" width="1920px" height="300px;">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
    </section>
    <section class="about container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/doctor_white.jpg')}}" alt="" width="520px" height="400px;">
            </div>
            <div class="col-md-6" style="margin-top: 130px">
                <h2>Bem vindo ao Victoriano</h2>
                <br>
                <h5 style="letter-spacing: 2px">Texto informativo, sobre o que é o site</h5>
                <br>
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Leia Mais
                    </a>
                  </p>
                  <div class="collapse" id="collapseExample">
                      <div class="row">

                          <div class="col-6">
                              <div class="card card-body" style="border: none">
                               <h3>Funcionamento</h3>
                               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda doloremque mollitia officiis minus ducimus explicabo beatae cumque veritatis facere, laudantium delectus eum quaerat architecto quis ratione, blanditiis perferendis? Culpa, eveniet.</p>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="card card-body" style="border: none">
                                  <h3>Filosofia</h3>
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam nisi asperiores debitis suscipit mollitia accusamus necessitatibus deserunt. A aliquid, ipsam accusamus deserunt numquam, reiciendis in nobis molestiae quasi ducimus saepe!</p>
                               
                              </div>
                          </div>
                      </div>
            </div>
        </div>
    </section>
    <hr>
        
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3E3A1D" fill-opacity="1" d="M0,32L1440,0L1440,320L0,320Z"></path>
       <g  transform="translate(201, 151)" >
           <text id="text_information" style="text-align: center; font-size: 20pt; fill: white;"> 
              Nossas especialidades
          </text>
          <use id="" xlink:href="#text_information"/>
       </g>
    </svg>
    <section class="services" style="background: #3E3A1D" >
        <div class="container">
            <div class = "row">
                <div class = "col-md-4">
                    <div class="card-base">
                        <div class="card-icon"><p href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="fas fa-tooth fa-1x"></i></p>
                        <div class="card-data widgetCardData" style="display:flex-block">
                            <h2 class="box-title" style="color: #bb7824; justify-content:center; align-itens: center">Nome</h2>
                            <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Leia Sobre
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body" style="border: none">
                                Texto sobre a especialidade
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3E3A1D" fill-opacity="1" d="M0,224L1440,192L1440,0L0,0Z"></path></svg>

    <section class="space">
        
    </section>
</body>
</html>