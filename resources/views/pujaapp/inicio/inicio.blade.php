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
    <!--css ow carrousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Puja inmobiliaria</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="header">
        <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">  <img src="img/logo.png" class="ms-4" alt=""></a>
        {{-- <div class="dropdown position-absolute top-4 end-0 pe-5">
            @if(Auth::guard('puja')->check())
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hola {{ Auth::guard('puja')->user()->name}}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li> 
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout-user') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            @else
                <a class="btn btn-primary" href="{{ route('showLoginFormUser') }}">Iniciar Sesion</a>
            @endif
        </div> --}}
        
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
          <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            <img src="img/logo.png" class="ms-4 d-none d-sm-none d-md-none d-md-block d-lg-block" alt="">
            <ul class="navbar-nav">
                <li class="nav-item active p-lg-4 p-md-0 p-sm-0">
                    <a class="nav-link" href="{{ route('app') }}">Compra</a>
                </li>
                <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                    <a class="nav-link" href="{{ route('alquiler') }}">Alquiler</a>
                </li>
                <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                    <a class="nav-link" href="{{ route('remate') }}">Remate</a>
                </li>
                <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                    <a class="nav-link boton" href="contactanos.html">Publica Aquí</a>
                </li>
            </ul>
          </div>
          <div class="row justify-content-center align-items-center rounded-pill border border-1 p-2 m-0 position-absolute end-0 d-none d-lg-flex">
            <div class="row justify-content-center d-flex col-6 dropdown m-0 text-center">
                <button class="btn dropdown-toggle" type="button" id="burgerMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/img/vector/menuburguer.svg" alt="Burger Icon" style="width: 30px; height: 30px;">
                </button>
                <ul class="dropdown-menu" aria-labelledby="burgerMenu">
                    @if (Auth::guard('puja')->check())
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
                <img src="img/slide1.png" class="d-block w-100 img-banner" alt="...">
                <div class="carousel-caption text-start">
                    <h2>Tu Hogar Ideal, Encuentra las mejores<br>
                        propiedades al Mejor Precio</h2>
                        <div class="input-group bg-white rounded-pill align-items-center p-2">
                            <input type="text" class="form-control rounded-pill border-0 buscar-propiedades" placeholder="Buscar propiedades">
                            <span class="search-icon me-3">
                                <button class="btn dropdown-toggle" type="button" id="burgerMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="img/vector/filter.svg" alt="Burger Icon" style="width: 30px; height: 30px;">
                                </button>
                                <div class="dropdown-menu dropdownmenu" aria-labelledby="burgerMenu" style="transform: translate(307px, 56px) !important;">
                                    <ul class="p-3" aria-labelledby="burgerMenu">
                                        <h2 style="  text-decoration: underline 3px #FB7125">Tipo de propiedad</h2>
                                        <li><a class="dropdown-item">Casa</a></li>
                                        <li><a class="dropdown-item">Departamento</a></li>
                                        <li><a class="dropdown-item">Oficina</a></li>
                                        <li><a class="dropdown-item">Terreno</a></li>
                                        <li><a class="dropdown-item">Local Comercial</a></li>

                                    </ul>
                                    <ul class="p-3" aria-labelledby="burgerMenu">
                                        <h2 style="  text-decoration: underline 3px #FB7125">Dormitorio</h2>
                                        <li><a class="dropdown-item">1 Dormitorio</a></li>
                                        <li><a class="dropdown-item">2 Dormitorio</a></li>
                                        <li><a class="dropdown-item">3 Dormitorio</a></li>
                                        <li><a class="dropdown-item">4 Dormitorio</a></li>
                                        <li><a class="dropdown-item">Más de 4 dormitorio</a></li>
                                    </ul>
                                    <ul class="p-3" aria-labelledby="burgerMenu">
                                        <h2 style="  text-decoration: underline 3px #FB7125">Características</h2>
                                        <li><a class="dropdown-item">Baños</a></li>
                                        <li><a class="dropdown-item">Cochera</a></li>
                                        <li><a class="dropdown-item">Jardín</a></li>
                                        <li><a class="dropdown-item">A estrenar</a></li>
                                    </ul>
                                </div>
                                
                            </span>
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
                            <input type="text" class="form-control rounded-pill border-0 buscar-propiedades" placeholder="Buscar propiedades">
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
                            <input type="text" class="form-control rounded-pill border-0 buscar-propiedades" placeholder="Buscar propiedades">
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
                    <div class="owl-carousel justify-content-center d-flex" id="img-propiedad">
                        @foreach ($item->imageproduct as $item_image)
                            @if($item_image->status==1)
                                <div>
                                    <img src="{{ asset('storage/products/' . $item_image->url_image) }}" alt="" class="img-fluid w-100 text-center m-0" style="max-height: 300px; width: 100% !important;">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @if(Auth::guard('puja')->check())
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
                    <a href="{{ route('detalle', ['id' => $item->id]) }}" style="text-decoration: none;list-style:none; color:#FB7125">
                    <span style="color: #1F1F1F"><img src="img/vector/maps.svg" alt=""> {{ $item->district->district }}</span>
                    <h2>{{ $item->categories->name }} {{ $item->district->district }}</h2>
                    <p style="color: #1F1F1F">{{ $item->statusProperty->name }}</p>
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
<section class="section-banner">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            items:1,
        });
    });
</script>
<!-- Incluye Bootstrap JS y Popper.js (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.querySelectorAll('.likeButton').forEach(function(likeButton) {
        likeButton.addEventListener('click', function () {
            var product_id = this.getAttribute('data-id-product');
            likeAction(product_id, this);
        });
    });
    function likeAction(id, buttonElement) {
        axios.post('/me_interesa', {
            product_id: id,
        })
        .then(function (response) {
            if (response.data.like_actual.status === 1) {
                buttonElement.querySelector('.heartImage').src = 'img/vector/corazonlleno.svg';
            } 
            else if (response.data.like_actual.status == 0){
                buttonElement.querySelector('.heartImage').src = 'img/vector/corazonvacio.svg';
            }else{
                buttonElement.querySelector('.heartImage').src = 'img/vector/corazonvacio.svg';
            }
            var likesCountElement = buttonElement.querySelector('p');
            if (likesCountElement) {
                var currentLikes = parseInt(likesCountElement.textContent.split(': ')[1]) || 0;

                if (response.data.like_actual.status === 1) {
                    likesCountElement.textContent = 'Interesados: ' + (currentLikes + 1);
                } else {
                    likesCountElement.textContent = 'Interesados: ' + (currentLikes - 1);
                }
            }
        })
        .catch(function (error) {
            console.error('Error al dar like:', error);
        });
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = new bootstrap.Carousel(document.querySelector('#carouselExampleDark'), {
            interval: 5000 // El intervalo en milisegundos (por ejemplo, 5000 para 5 segundos)
        });
    });
</script>
</body>
</html>