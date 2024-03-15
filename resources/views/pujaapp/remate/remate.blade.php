<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVbsHwMRwQ84jWyeHFDmoVXBnoVbIM1u1RjRi7uenLTXaRWjGtQxrbtTqpZqH09~" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha384-EVbsHwMRwQ84jWyeHFDmoVXBnoVbIM1u1RjRi7uenLTXaRWjGtQxrbtTqpZqH09~" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/iconologo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./css/alquiler.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha384-8Fj+q6vjA7S+Tfk6JB4WpDl+3s6qOpT0O5r5mzX5FZZBfQ9Sr6P6d7oNiR7fCjNo" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha384-DfXdAeFRuPjoXz6UYLM9pddzR1j9d51zbr5fFpRzsX4q1iRKpIbs15nl8ZnYU5h0" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Puja inmobiliaria</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="header">
        <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">  <img src="img/logo.png" class="ms-4" alt=""></a>
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
          <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            <img src="img/logo.png" class="ms-4 d-none d-sm-none d-md-none d-md-block d-lg-block" alt="">
            <ul class="navbar-nav">
                <li class="nav-item p-4">
                    <a class="nav-link" href="{{ route('app') }}">Compra</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link" href="{{ route('alquiler') }}">Alquiler</a>
                </li>
                <li class="nav-item p-4 active">
                    <a class="nav-link" href="{{ route('remate') }}">Remate</a>
                </li>
                <li class="nav-item p-4">
                    <a class="nav-link boton" href="contactanos.html">Publica Aquí</a>
                </li>
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
                <img src="img/banner2.1.png" class="d-block w-100 img-banner" alt="...">
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
        <h2 class="ms-5">Buscar por</h2>
        <div class="row">
            <div class="owl-carousel owl-theme text-center">
                <div class="item">
                    <a href="{{ route('alquiler')}}?category_id=1" style="color: {{ (request('category_id') == 1) ? 'white' : '#000000' }} !important;">
                        @if(request('category_id') == 1)
                            <img src="./img/vector/casablanco.svg" class="img-fluid" alt="">Casa
                        @else
                            <img src="./img/vector/casa.svg" class="img-fluid" alt="">Casa
                        @endif
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('alquiler')}}?category_id=2" style="color: {{ (request('category_id') == 2) ? 'white' : '#000000' }} !important;">
                        @if(request('category_id') == 2)
                            <img src="./img/vector/departamentoblanco.svg" class="img-fluid" alt="">Departamento
                        @else
                            <img src="./img/vector/departamento.svg" class="img-fluid" alt="">Departamento
                        @endif
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('alquiler')}}?category_id=3" style="color: {{ (request('category_id') == 3) ? 'white' : '#000000' }} !important;">
                        @if(request('category_id') == 3)
                            <img src="./img/vector/oficinablanco.svg" class="img-fluid" alt="">Oficina
                        @else
                            <img src="./img/vector/oficina.svg" class="img-fluid" alt="">Oficina
                        @endif
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('alquiler')}}?category_id=4" style="color: {{ (request('category_id') == 4) ? 'white' : '#000000' }} !important;">
                        @if(request('category_id') == 4)
                            <img src="./img/vector/terrenoblanco.svg" class="img-fluid" alt="">Terreno
                        @else
                            <img src="./img/vector/terreno.svg" class="img-fluid" alt="">Terreno
                        @endif
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('alquiler')}}?category_id=5" style="color: {{ (request('category_id') == 5) ? 'white' : '#000000' }} !important;">
                        @if(request('category_id') == 5)
                            <img src="./img/vector/localblanco.svg" class="img-fluid" alt="">Local
                        @else
                            <img src="./img/vector/local.svg" class="img-fluid" alt="">Local
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
<section>
    <div class="container-fluid">
        <div class="row m-0 p-0 ">
            @foreach($products as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-12 position-relative">
                    <div class="owl-carousel justify-content-center d-flex" id="img-propiedad">
                        @foreach ($item->imageproduct as $item_image)
                        <div>
                            <img src="{{ asset('storage/products/' . $item_image->url_image) }}" alt="" class="img-fluid w-100 text-center" style="max-height: 300px">
                        </div>
                        @endforeach
                    </div>
                    <div class="position-absolute top-0 end-0 likeButton" data-id-product="{{ $item->id }}" style="z-index: 20">
                        @if($item->interesado)
                            @if($item->interesado->status == 0)
                                <img src="img/vector/corazonvacio.svg" class="heartImage pt-2 pe-2" alt="Corazón vacio">
                            @else
                                <img src="img/vector/corazonlleno.svg" class="heartImage pt-2 pe-2" alt="Corazón lleno">
                            @endif
                        @else
                            <img src="img/vector/corazonvacio.svg" alt="" class="heartImage pt-2 pe-2">
                        @endif

                        <input type="hidden" value="{{ $item->id }}" name="product_id">
                        {{-- <p class="pt-2">Interesados: {{ $totalLikesPorPrestamo[$item->id] ?? 0 }}</p> --}}
                    </div>
                </div>
                <div class="col-12 justify-content-center ps-3 pe-3">
                    <a href="{{ route('detalle', ['id' => $item->id]) }}"
                        style="text-decoration: none;list-style:none; color:#FB7125">
                    <span style="color: #1F1F1F"><img src="img/vector/maps.svg" alt=""> {{ $item->district->district }}</span>
                    <h2>{{ $item->categories->name }} {{ $item->district->district }}</h2>
                    <p>{{ $item->statusProperty->name }}</p>
                    <div class="row ps-3 pe-3">
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/habitacion.svg" alt="" class="img-fluid">
                            <p class="mb-0">Habitaciones</p>
                            <h2 class="mb-0"style="color: #1F1F1F">{{ $item->rooms }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/baño.svg" alt="" class="img-fluid">
                            <p class="mb-0">Baños</p>
                            <h2 class="mb-0" style="color: #1F1F1F">{{ $item->bathrooms }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/cochera.svg" alt="" class="img-fluid">
                            <p class="mb-0">Cochera</p>
                            <h2 class="mb-0"style="color: #1F1F1F">{{ $item->garage }}</h2>
                        </div>
                        <div class="col-3 mi-div text-center">
                            <img src="img/vector/metros.svg" alt="" class="img-fluid">
                            <p class="mb-0">m2</p>
                            <h2 class="mb-0"style="color: #1F1F1F">{{ $item->square_meters }}</h2>
                        </div>
                    </div>
                        <p style="color: #1F1F1F">Desde</p>
                        <h2 style="color: #1F1F1F;font-weight:bold">$ {{ $item->price }}</h2>
                    </a>
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
            <div class="col-lg-5 col-md-6 col-sm-12 order-lg-1  order-md-1 order-sm-2 order-2">
                <img src="img/Component 2.png" alt="" class="img-fluid imagengozu">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12  order-lg-2 order-md-2 order-sm-1 order-1">
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
            <div class="col-12 m-0 text-lg-start">
                <img src="img/vector/logoblanco.svg" class="text-lg-start pb-lg-5 ps-lg-5  p-md-2 p-md-2  p-sm-3 p-sm-3" height="130px" alt="">  
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
                <p class="p-0 m-0">Av. Canaval y Moreyra 290</p>
                <p class="p-0 m-0">Oficina No 41 y 42</p>
                <p class="p-0 m-0">Cuarto Piso, San Isidro</p>
                <p class="p-0 m-0">consulta@pujainmobiliaria.com.pe</p>
                <p class="p-0 m-0">(01) 4036709</p>
                <p class="p-0 m-0">+51 934 339 375</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h2>Síguenos</h2>
                <div class="text-center align-items-center ">
                        <img src="img/vector/facebookblanco.svg" class="img-fluid text-center icon m-auto p-2" alt="">
                        <img src="img/vector/instagramblanco.svg" class="img-fluid text-center icon m-auto p-2" alt="">
                                  
                </div>
                <img src="img/vector/libroreclamaciones.svg" class="text-start" height="25px" alt=""> <span></span>Libro de reclamaciones</span>
            </div>
        </div>
    </div>
</footer>

<!-- Incluye Bootstrap JS y Popper.js (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha384-EkEiLB/XwiqW7GOq6CQGxZ9Fqf6GoUjA8jGx3+HHgjnGQQlnarwwy8zoD4lF1zP" crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script>
    $(document).ready(function(){
        $('#img-propiedad').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#img-propiedad').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        });
    });
</script>
</body>
</html>