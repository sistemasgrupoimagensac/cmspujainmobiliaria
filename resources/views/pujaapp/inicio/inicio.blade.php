<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVbsHwMRwQ84jWyeHFDmoVXBnoVbIM1u1RjRi7uenLTXaRWjGtQxrbtTqpZqH09~" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha384-EVbsHwMRwQ84jWyeHFDmoVXBnoVbIM1u1RjRi7uenLTXaRWjGtQxrbtTqpZqH09~" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/iconologo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">
    <title>Puja inmobiliaria</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="header">
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <img src="img/logo.png" class="ms-4" alt="">
            <ul class="navbar-nav">
                <li class="nav-item active p-4">
                    <a class="nav-link" href="index.html">Compra</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link" href="quienesomos.html">Alquiler</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link" href="servicios.html">Remate</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link" href="inversiones.html">Inversiones</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link boton" href="contactanos.html">Contáctanos</a>
            </ul>
          </div>
    </nav>
</header>
<section>
    <div class="container-fluid banner">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/slide1.png" class="d-block w-100 img-banner" alt="...">
                <div class="carousel-caption text-start">
                    <h2>Tu Hogar Ideal, Encuentra las mejores<br>
                        propiedades al Mejor Precio</h2>
                        <div class="input-group bg-white rounded-pill align-items-center p-2">
                            <input type="text" class="form-control rounded-pill border-0" placeholder="Buscar propiedades">
                            <span class="search-icon me-3"><img src="img/vector/filter.svg" alt=""></span>
                            <span class="search-icon"><img src="img/vector/search.svg" alt=""></span>
                        </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="img/slide2.png" class="d-block w-100 img-banner" alt="...">
                <div class="carousel-caption text-start">
                    <h2>Tu Hogar Ideal, Encuentra las mejores<br>
                        propiedades al Mejor Precio</h2>
                        <div class="input-group bg-white rounded-pill align-items-center p-2">
                            <input type="text" class="form-control rounded-pill border-0" placeholder="Buscar propiedades">
                            <span class="search-icon me-3"><img src="img/vector/filter.svg" alt=""></span>
                            <span class="search-icon"><img src="img/vector/search.svg" alt=""></span>
                        </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="img/slide3.png" class="d-block w-100 img-banner" alt="...">
                <div class="carousel-caption text-start">
                    <h2>Tu Hogar Ideal, Encuentra las mejores<br>
                        propiedades al Mejor Precio</h2>
                        <div class="input-group bg-white rounded-pill align-items-center p-2">
                            <input type="text" class="form-control rounded-pill border-0" placeholder="Buscar propiedades">
                            <span class="search-icon me-3"><img src="img/vector/filter.svg" alt=""></span>
                            <span class="search-icon"><img src="img/vector/search.svg" alt=""></span>
                        </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

    </div>
</section>
<section>
    <div class="container-fluid">
      
        <div class="row m-0 p-0 ">
            <h2>Los mas destacado</h2>
            @foreach($products as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/products/' . $item->image) }}" alt="" class="img-fluid w-100">
                    <div class="position-absolute top-0 end-0">
                        <img src="img/vector/corazonvacio.svg" class="p-3" alt="">
                    </div>
                </div>
                <div class="col-12 justify-content-center ps-3 pe-3">
                    <span><img src="img/vector/maps.svg" alt=""> {{ $item->district->district }}</span>
                    <h2>{{ $item->categories->name }} {{ $item->district->district }}</h2>
                    <p>{{ $item->statusProperty->name }}</p>
                    <div class="row ps-3 pe-3">
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/habitacion.svg" alt="" class="img-fluid">
                            <p class="mb-0">Habitaciones</p>
                            <h2 class="mb-0">{{ $item->rooms }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/baño.svg" alt="" class="img-fluid">
                            <p class="mb-0">Baños</p>
                            <h2 class="mb-0">{{ $item->bathrooms }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/cochera.svg" alt="" class="img-fluid">
                            <p class="mb-0">Cochera</p>
                            <h2 class="mb-0">{{ $item->garage }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/metros.svg" alt="" class="img-fluid">
                            <p class="mb-0">m2</p>
                            <h2 class="mb-0">{{ $item->square_meters }}</h2>
                        </div>
                    </div>
                    <p>Desde</p>
                    <h2>USD 1090.659.007</h2>
                </div>
            </div>
            @endforeach            
        </div>
        
    </div>
</section>
<section>
    <div class="container-fluid m-0 text-center">
        <button class="btn btn-primary boton"> Explorar más propiedades</button>
    </div>
</section>
<section style="margin-top: 20rem;">
    <div class="container-fluid" style="background-color: #FF5B00;">
        <div class="row align-items-center justify-content-center m-0">
            <div class="col-lg-5 col-md-6 col-sm-12 order-md-1 order-sm-2">
                <img src="img/Component 2.png" alt="" class="img-fluid imagengozu">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12  order-md-1 order-sm-1">
                <h2>Entra a la mejor subastas <br>
                de propiedades</h2>
                <h2>Encuentra tu hogar al mejor precio</h2>
                <button class="btn boton-reverso">Entra a la subasta</button>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container-fluid footer-div " style="background-color: #1F1F1F;">
        <div class="row align-items-evenly justify-content-center m-0 text-center ">
           
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="img/vector/logoblanco.svg" class="text-start ps-5 pb-5" height="130px" alt="">  
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
   
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
       
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                
            </div>
        </div>
        <div class="row align-items-evenly justify-content-center m-0 text-center ">
           
            <div class="col-lg-3 col-md-6 col-sm-12">
                
                <ul class="">
                    <li>Inicio</li>
                    <li>Nosotros</li>
                    <li>Publicar un Inmueble</li>
                    <li>Ayuda</li>
                    <li>Mapa de Sitio</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>Anunciantes</li>
                    <li>Agencias</li>
                    <li>Agentes</li>
                    <li>Corredores</li>
                    <li>Constructores</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h2>Contáctanos</h2>
                <p>Av. Canaval y Moreyra 290</p>
                <p>Oficina No 41 y 42</p>
                <p>Cuarto Piso, San Isidro</p>
                <br>
                <p>consulta@pujainmobiliaria.com.pe</p>
                <br>
                <p>(01) 4036709</p>
                <br>
                <p>+51 934 339 375</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h2>Síguenos</h2>
                <div class="text-center align-items-center ">
                        <img src="img/vector/facebookblanco.svg" class="img-fluid text-center icon m-auto p-2" alt="">
                        <img src="img/vector/instagramblanco.svg" class="img-fluid text-center icon m-auto p-2" alt="">
                                  
                </div>
            </div>
        </div>
        <div class="row align-items-evenly justify-content-center m-0 text-center ">
           
            <div class="col-lg-3 col-md-6 col-sm-12">
               <img src="img/vector/libroreclamaciones.svg" class="text-start" height="25px" alt=""> <span></span>Libro de reclamaciones</span>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
   
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
       
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                
            </div>
        </div>
    </div>
</footer>

<!-- Incluye Bootstrap JS y Popper.js (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>