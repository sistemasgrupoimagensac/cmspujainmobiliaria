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
                    <ul class="navbar-nav dropdown">
                        <li class="nav-item dropdown p-lg-4 p-md-0 p-sm-0">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownCompra" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Compra</a>
                            <div class="dropdown-menu dropdownmenunav align-items-center p-3" aria-labelledby="navbarDropdownCompra">
                                <ul class="">
                                    <li><a class="dropdown-item" href="#">Tipo de propiedad</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?category_id=1">Casa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?category_id=2">Departamento</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?category_id=3">Oficina</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?category_id=4">Terreno</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?category_id=5">Local Comercial</a></li>
                                </ul>
                                <ul class="">
                                    <li><a class="dropdown-item" href="{{ route('app') }}">Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?rooms=1">1 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?rooms=2">2 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?rooms=3">3 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?rooms=4">4 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?rooms=5">Más de 4 Dormitorio</a></li>
                                </ul>
                                <ul class="">
                                    <li><a class="dropdown-item" href="#">Características</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?bathrooms">Baños</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?garage">Cochera</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?">Jardín</a></li>
                                    <li><a class="dropdown-item" href="{{ route('app') }}?">A estrenar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown p-lg-4 p-md-0 p-sm-0">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownAlquiler" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Alquiler</a>
                            <div class="dropdown-menu dropdownmenunav align-items-center p-3" aria-labelledby="navbarDropdownAlquiler">
                                <ul class="">
                                    <li><a class="dropdown-item" href="#">Tipo de propiedad</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?category_id=1">Casa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?category_id=2">Departamento</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?category_id=3">Oficina</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?category_id=4">Terreno</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?category_id=5">Local Comercial</a></li>
                                </ul>
                                <ul class="">
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}">Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?rooms=1">1 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?rooms=2">2 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?rooms=3">3 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?rooms=4">4 Dormitorio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?rooms=5">Más de 4 Dormitorio</a></li>
                                </ul>
                                <ul class="">
                                    <li><a class="dropdown-item" href="#">Características</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?bathrooms">Baños</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?garage">Cochera</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?">Jardín</a></li>
                                    <li><a class="dropdown-item" href="{{ route('alquiler') }}?">A estrenar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown p-lg-4 p-md-0 p-sm-0">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownRemate" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Remate</a>
                            <div class="dropdown-menu dropdownmenunav align-items-center p-3" aria-labelledby="navbarDropdownRemate">
                                <ul class="">
                                    <li><a class="dropdown-item" href="#">Tipo de propiedad</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('remate') }}?category_id=1">Casa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('remate') }}?category_id=2">Departamento</a></li>
                                    <li><a class="dropdown-item" href="{{ route('remate') }}?category_id=3">Oficina</a></li>
                                    <li><a class="dropdown-item" href="{{ route('remate') }}?category_id=4">Terreno</a></li>
                                    <li><a class="dropdown-item" href="{{ route('remate') }}?category_id=5">Local Comercial</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                            <a class="nav-link boton" href="{{route('publicar')}}">Publica Aquí</a>
                        </li>
                    </ul>
                </div>
              <div class="row justify-content-center align-items-center rounded-pill border border-1 p-2 m-0 position-absolute end-0 d-none d-lg-flex">
                <div class="row justify-content-center d-flex col-6 dropdown m-0 text-center">
                    <button class="btn dropdown-toggle" type="button" id="burgerMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/vector/menuburguer.svg" alt="Burger Icon" style="width: 30px; height: 30px;">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="burgerMenu">
                        @if (Auth::check())
                            <li>
                                <a class="dropdown-item" href="{{ route('favoritos') }}" onclick="event.preventDefault(); document.getElementById('favoritos-form').submit();">Favoritos</a>
                                <form id="favoritos-form" action="{{ route('favoritos') }}" method="get" style="display: none;">
                               
                                </form>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                       
                        @else
                         <li><a class="dropdown-item" href="{{ route('showLoginFormUser') }}" onclick="event.preventDefault(); document.getElementById('perfil-form').submit();">Iniciar Sesión</a>
                            <form id="perfil-form" action="{{ route('showLoginFormUser') }}" method="GET" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endif
                
                    </ul>
                </div>
                <div class="d-flex col-6 m-0 justify-content-center">
                    <img class="rounded-circle img-fluid" src="/img/vector/perfil.png" style="height:3.5rem;" alt="profile">
                </div>
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
                      
                        <div class="input-group bg-white rounded-pill align-items-center p-2">
                            <h2 style="z-index: 99;color:#1F1F1F">Tu Hogar Ideal, Encuentra las mejores<br>
                                propiedades al Mejor Precio</h2>
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
    <div class="container-fluid pt-3 pb-4">
        <h2 class="ms-5">Buscar por</h2>
        <div class="row">
            <div class="owl-carousel tipo-busqueda-filtro owl-theme text-center">
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
                    <div class="owl-carousel img-propiedad justify-content-center d-flex" id="img-propiedad">
                        @foreach ($item->imageproduct as $item_image)
                            @if($item_image->status == 1)
                                <div>
                                    <img src="{{ asset('storage/products/' . $item_image->url_image) }}" alt="" class="img-fluid w-100 text-center" style="max-height: 300px">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @if(Auth::check())
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
                    @else
                        <div class="position-absolute top-0 end-0 likeButton" data-id-product="{{ $item->id }}" style="z-index: 20">
                            <a href="{{route('showLoginFormUser')}}"><img src="img/vector/corazonvacio.svg" alt="" class="heartImage pt-2 pe-2"></a>
                        </div>
                    @endif
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
            {{-- @foreach($products as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/products/' . $item->image) }}" alt="" class="img-fluid w-100 text-center" style="max-height: 300px">
                    <div class="position-absolute top-0 end-0">
                        <img src="img/vector/corazonvacio.svg" class="p-3" alt="">
                    </div>
                </div>
                <div class="col-12 justify-content-center ps-3 pe-3">
                    <span><h3><img src="img/vector/maps.svg" alt=""> {{ $item->district->district }} </h3></span>
                    <h2 style="color: #FF5B00; ">{{ $item->categories->name }} {{ $item->district->district }}</h2>
                    <p>Propiedad en {{ $item->statusProperty->name }}</p>
                    <div class="row ">
                        <div class="col-9">
                            {{ $item->description }}
                            <h2 class="mb-0">{{ $item->statusProperty->name }}</h2>
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
            @endforeach             --}}
        </div>
        
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
    $('.tipo-busqueda-filtro').owlCarousel({
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
        $('.img-propiedad').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            items:1
        });
    });
</script>
</body>
</html>