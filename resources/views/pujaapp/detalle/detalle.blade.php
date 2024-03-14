<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <title>G Inversiones</title>
    <!-- <link rel="stylesheet" href="css/app.css"> -->
    <link rel="stylesheet" href="{{ asset('./css/detalle.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/form.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/form.css')}}">
    <!--CDN POPPINS FUENTE-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!--css ow carrousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--lightbox-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
</head>
<body> 
<div class="container-fluid seccion-1 d-none d-lg-block  d-sm-none d-xs-none p-3 ">
    <p class="text-center m-0 p-0"></p>
</div>
<!--desktop-->
<div class="container-fluid seccion-2 p-3 d-block d-none d-lg-block ">
    <div class="row align-items-center justify-content-evenly">
        <div class="col-lg-3">
            <a href="{{route('app')}}">
                <img class="img-fluid logo p-2" src="../img/logo.png" alt="">
            </a>
        </div>
        <div class="col-lg-6">
            <div class="container opciones">
                <form action="{{route('app')}}">
                    <div class="row  rounded-pill border border-1  p-1">
                        <div class="col-5 d-flex align-items-center">
                            <select class="js-example-basic-single w-100 border-0" name="distrito">
                                <option value="" selected>Buscar por provincia</option>
                                @foreach($distritos as $item)
                                <option value="{{ $item->id }}">{{ $item->district }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 d-flex">
                            <img src="/img/vector/Vector 2.png" class="" alt="">
                            <input class="w-100 h-100 border-0 ms-4" type="text" placeholder="Monto a invertir" name="monto">
                        </div>
                        <div class="col-2 justify-content-end d-flex"> 
                            <button type="submit" style="background-color: transparent; border: none;">
                                <img src="/img/vector/search.svg" alt="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row col-2 justify-content-center align-items-center m-0">
            <div class="container burger p-0">
                <div class="row justify-content-center align-items-center rounded-pill border border-1 p-2 m-0">
                    <div class="row justify-content-center d-flex col-6 dropdown m-0 text-center">
                        <button class="btn dropdown-toggle" type="button" id="burgerMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/vector/menuboton.svg" alt="Burger Icon" style="width: 30px; height: 30px;">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="burgerMenu">
                            <li><a class="dropdown-item" href="{{ route('app') }}" onclick="event.preventDefault(); document.getElementById('perfil-form').submit();">app</a>
                                <form id="perfil-form" action="{{ route('app') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            {{-- <li><a class="dropdown-item" href="{{ route('perfil') }}" onclick="event.preventDefault(); document.getElementById('perfil-form').submit();">Perfil</a>
                                <form id="perfil-form" action="{{ route('perfil') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('favoritos') }}" onclick="event.preventDefault(); document.getElementById('favoritos-form').submit();">Mis Favoritos</a>
                                <form id="favoritos-form" action="{{ route('favoritos') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                            </li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex col-6 m-0 justify-content-center">
                        <img class="rounded-circle img-fluid" src="/img/vector/perfil.png" style="height:3.5rem;" alt="profile">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border-1 border-top border-bottom p-3">
        <div class="row justify-content-evenly align-items-center">
            <div class="col-12 border-end-2 justify-content-start">
                <p style="color: #0000;">Buscar ´por:</p>
                <div class="owl-carousel owl-theme" id="menu-tipo-garantia">
                    <div class="item justify-content-center"><a href="{{ route('app')}}?category_id=1">
                        <img src="../img/vector/casaanaranjado.svg" class="img-fluid">Casas</a>
                    </div>
                    <div class="item"><a href="{{ route('app')}}?category_id=2">
                        <img src="../img/vector/departamentoanaranjado.svg" class="img-fluid">Departamento</a>
                    </div>
                    <div class="item"><a href="{{ route('app')}}?category_id=3">
                        <img src="../img/vector/oficinaanaranjado.svg" class="img-fluid">oficina</a>
                    </div>
                    <div class="item"><a href="{{ route('app')}}?category_id=3">
                        <img src="../img/vector/localanaranjado.svg" class="img-fluid">Local Comercial</a>
                    </div>
                    <div class="item"><a href="{{ route('app')}}?category_id=4">
                        <img src="../img/vector/terrenoanaranjado.svg" class="img-fluid">Terreno</a>
                    </div>
                    <div class="item"><a href="{{ route('app')}}?co_tipo_garantia=4">
                        <img src="../img/vector/localanaranjado.svg" class="img-fluid">Terreno</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-2 ">
                <p style="color: #0000;">Ordenar por:</p>
                <div class="col 12 justify-content-evenly d-flex ">
                    <div id="btn-lista" style="cursor:pointer"><img src="../img/vector/lista.svg" alt=""> Lista</div>
                    <div id="btn-grid" style="cursor:pointer"><img src="../img/vector/grilla.svg" alt=""> Grilla</div>
                </div>
            </div> --}}

        </div>
    </div>
</div>
<!--mobil-->
<div class="container-fluid seccion-2  d-lg-none d-md-block d-sm-block d-xs-block menu-mobil bg-light position-fixed fixed-top pt-4" style="z-index: 99;">
    <div class="col-12 d-flex pb-3 align-items-center">
        <form action="{{ route('app')  }}" class="col-12 d-flex align-items-center">
            <div class="col-12 d-flex bg-white rounded-pill border border-1 p-2">
                <div class="col-2 rounded-circle d-flex align-items-center justify-content-center">
                    <button type="submit" style="background-color: transparent; border: none;"><img
                        src="../img/vector/searchmobil.png" alt="">
                    </button>
                </div>
                <div class="col-10">
                    <select class="js-example-basic-single w-100" name="state" name="distrito">
                        <option value="" selected>Buscar por Provincia</option>
                        @foreach($distritos as $item)
                        <option value="{{ $item->co_distrito }}">{{ $item->no_distrito }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div class="col-12 inmuebles-mobil">
        <div class="owl-carousel owl-theme text-center" id="menu-tipo-garantia">
            <div class="item">
                <a href="{{ route('app')}}?co_tipo_garantia=1" style="color:#01276A !important" class="d-block">
                    <img src="../img/vector/home.svg" class="img-fluid mx-auto" alt="Casas">
                    <p class="mt-2 text-center"style="color:#01276A" >Casas</p>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('app')}}?co_tipo_garantia=2" style="color:#01276A !important" class="d-block">
                    <img src="../img/vector/department.svg" class="img-fluid mx-auto" alt="Departamento">
                    <p class="mt-2 text-center"style="color:#01276A" >Departamento</p>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('app')}}?co_tipo_garantia=3" style="color:#01276A !important" class="d-block">
                    <img src="../img/vector/local.svg" class="img-fluid mx-auto" alt="Local Comercial">
                    <p class="mt-2 text-center"style="color:#01276A" >Local Comercial</p>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('app')}}?co_tipo_garantia=4" style="color:#01276A !important" class="d-block">
                    <img src="../img/vector/granja.svg" class="img-fluid mx-auto" alt="Granja/Finca">
                    <p class="mt-2 text-center"style="color:#01276A" >Granja/Finca</p>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('app')}}?co_tipo_garantia=5" style="color:#01276A !important" class="d-block">
                    <img src="../img/vector/terreno.svg" class="img-fluid mx-auto" alt="Terreno">
                    <p class="mt-2 text-center"style="color:#01276A" >Terreno</p>
                </a>
            </div>
        </div>
    </div>
 </div>
  
    <div class="container pb-5 contenido">
        <div class="cajamegusta likeButton" data-co-prestamo="{{ $detalle->co_prestamo }}">
            @if(optional($detalle->interesado)->estado == 1)
                <img src="../img/vector/corazonlleno.png" alt="No me gusta" class="heartImage">
            @else
                <img src="../img/vector/corazon.png" alt="Me gusta" class="heartImage">
            @endif
          
        </div>
        <p>{{ $detalle->no_tipo_garantia }}</p>
        <h1><img src="../img/vector/Ubicacion.png" alt=""> {{ $detalle->no_distrito }}</h1>
        <div class="row justify-content-center col-12 imagen-sitio">
            <div class="owl-carousel justify-content-center d-flex" id="img-inmuebles">
                <div class=""><a href="../img/barranco1.png" data-lightbox="roadtrip"><img src="../img/barranco1.png"class="img-fluid"></a></div>
                <div class=""><a href="../img/barranco2.png" data-lightbox="roadtrip"><img src="../img/barranco2.png"class="img-fluid"></a></div>
                <div class=""><a href="../img/barranco3.png" data-lightbox="roadtrip"><img src="../img/barranco3.png"class="img-fluid"></a></div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5 pt-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: justify" >
                    <h3><strong>Perfil del Empresario</strong></h3>
                    <p><strong>Motivo del préstamo requerido.</strong></p>
                    <p>La propietaria y el fiador solidario solicitan el préstamo para la cancelación de una deuda hipotecaria, y el restante como capital de trabajo.</p>
                    <p>Actualmente el fiador solidario es propietario de 4 autos, los cuales alquila como taxi y les genera un ingreso mensual promedio de S/6,000.00, la propietaria tiene una bodega en el primer piso y mantiene un ingreso fijo de S/2,500.00, adicionalmente también fabrican ropa y la venden en Gamarra, por lo que dicha actividad les da una rentabilidad mensual de S/3,000.00 a S/5,000.00.</p>
                    <p>Con el restante del capital desean cubrir la campaña navideña, para la bodega y comprar telas para fabricar ropa.</p>
                    <p>Monto de Financiamiento</p>
                    <h2>{{$detalle->nc_tipo_moneda}} {{ number_format($detalle->nu_total_solicitado,2) }}</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <form class="form m-auto border-1 border " action="">
                        <div class="d-flex m-auto justify-content-center align-items-center p-3">
                            <img src="/img/vector/formicon.svg" alt=""><p class="p-4">Contáctanos</p>
                        </div>
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="button" class="btn btn-block btn-primary mb-3">Enviar</button>
                        <p>Rodrigo Torres</p>
                        <p>+51 999 999 999</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 detalle-2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../img/vector/tasa.svg" alt="">
                    <p>tasa de interés Mensual:</p>
                    <h3>{{ number_format($detalle->nu_tasa_interes_mensual,2 ) }}%</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../img/vector/plazo.svg" alt="">
                    <p>Plazo de Financiamiento:</p>
                    <h3>{{$detalle->no_tiempo_pago}}</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../img/vector/financiamiento.svg" alt="">
                    <p>Tipo de Financiamiento</p>
                    <h3>{{ $detalle->no_forma_pago}}</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../img/vector/Comercial.svg" alt="">
                    <p>Valor Comercial del inmueble:</p>
                    <h3>{{$detalle->nc_tipo_moneda}} {{ number_format($detalle->nu_total_solicitado,2) }}</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="../img/vector/interesados.png" alt="">
                    <p>Interesados:</p>
                    <h3>{{ $totalLikesPorPrestamo[$detalle->co_prestamo] ?? 0 }}</h3>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid m-auto text-center justify-content-center">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.82598105527808!2d-77.02340514504772!3d-12.097380974593932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c86feca64203%3A0xbd06b9c408851116!2sAv.%20Canaval%20y%20Moreyra%20290%2C%20Lima%2015047!5e0!3m2!1ses-419!2spe!4v1708385630882!5m2!1ses-419!2spe" style="border:0; height:75vh;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--modal menu filtro-->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasTopLabel">Filtros</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="">
                <div class="row mt-2">
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione filtro</option>
                            <option value="1">Por provincia</option>
                            <option value="2">Monto invertir</option>
                        </select>
                    </div>
                    <div class="col-7">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <div class="container-fluid wiguet d-lg-none d-md-block d-sm-block d-xs-block menu-mobil bg-light position-fixed fixed-bottom pt-3 pt-3" style="z-index: 99;">
        <div class="col-12 inmuebles-mobil">
            <div class="row align-items-evenly justify-content-center inmuebles-mobil">
                <div class="col-4">
                    <a href="{{ route('app')}}" style="color:#01276A !important; text-decoration:none;" class="d-block">
                        <img src="/img/vector/searchmobil.png" class="img-fluid mx-auto" alt="Casas">
                        <p class="mt-2 text-center"style="color:#01276A !important" >Buscar</p>
                    </a>
                </div>
                {{-- <div class="col-4">
                    <a href="{{ route('favoritos')}}" style="color:#F59C1A !important; text-decoration:none;" class="d-block">
                        <img src="/img/vector/corazon.png" class="img-fluid mx-auto" alt="Departamento">
                        <p class="mt-2 text-center"style="color:#F59C1A !important" >Favoritos</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ route('perfil')}}?co_tipo_garantia=3" style="color:#01276A !important; text-decoration:none;" class="d-block">
                        <img src="/img/vector/user-mobile.png" class="img-fluid mx-auto" alt="Local Comercial">
                        <p class="mt-2 text-center"style="color:#01276A" >Perfil</p>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
<!--ow carrousel-->
<div class="container-fluid text-center p-2"style="background-color:#E3E3E3">
    <a href="www.ginversiones.pe" style="text-decoration: none; color:#01276A">www.ginversiones.pe</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script>
    $(document).ready(function(){
        $('#img-inmuebles').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 5,
                }
            }
        });
    });
</script>
<script>
    $('#menu-tipo-garantia').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        responsive: {
                0: {
                    items: 3,
                },
                600: {
                    items: 5,
                },
                1000: {
                    items: 5,
                }
        }
    })
    $('#img-inmuebles').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
        }
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/jQuery.headroom.min.js"></script>
<script>
    $(document).ready(function() {
    var previousScrollPosition = 0;
    var menuHeight = $('.wiguet').height();
        $(window).scroll(function() {
            var currentScrollPosition = $(window).scrollTop();

            if (currentScrollPosition > previousScrollPosition) {
                // Scrolling down - hide the menu
                $('.wiguet').addClass('hidden');
            } else {
                // Scrolling up or at the top - show the menu
                if (currentScrollPosition <= menuHeight) {
                    $('.wiguet').addClass('visible'); // Added "visible" class
                } else {
                    $('.wiguet').removeClass('hidden'); // Removed "hidden" class check
                }
            }
            previousScrollPosition = currentScrollPosition;
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.querySelectorAll('.likeButton').forEach(function(likeButton) {
        likeButton.addEventListener('click', function () {
            var co_prestamo = this.getAttribute('data-co-prestamo');
            likeAction(co_prestamo, this);
        });
    });
    function likeAction(co_prestamo, buttonElement) {
        axios.post('/me_interesa', {
            co_prestamo: co_prestamo,
        })
        .then(function (response) {
            if (response.data.like_actual.estado === 1) {
                buttonElement.querySelector('.heartImage').src = '/img/vector/corazonlleno.png';
            } 
            else{
                buttonElement.querySelector('.heartImage').src = '/img/vector/corazon.png';
            }
            var likesCountElement = buttonElement.querySelector('p');
            if (likesCountElement) {
                var currentLikes = parseInt(likesCountElement.textContent.split(': ')[1]) || 0;

                if (response.data.like_actual.estado === 1) {
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
    lightbox.option({
        'resizeDuration': 50,
        'wrapAround': true,
        'showImageNumberLabel':true
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
</body>
</html>