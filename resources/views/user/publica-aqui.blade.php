<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    


    <link rel="stylesheet" href="css/publicar.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="header">
            <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">  <img src="img/logo.png" class="ms-4" alt=""></a>    
            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
              <div class="collapse navbar-collapse w-100 justify-content-evenly text-center" id="navbarNav">
        
                <ul class="navbar-nav w-100 justify-content-evenly">
                    <li>
                        <a href=" {{ route('publica-aqui') }} "><img src="img/logo.png" class="ms-4 d-none d-sm-none d-md-none d-md-block d-lg-block" alt=""></a>
                    </li>
                    <li class="nav-item active p-lg-4 p-md-0 p-sm-0">
                        <a class="nav-link" href="{{ route('mis-avisos') }}">Mis Avisos</a>
                    </li>
                    <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                        <a class="nav-link" href="{{ route('interesados') }}">Mis Interesados</a>
                    </li>
                    <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                        <a class="nav-link" href="{{ route('remate') }}">Mi Actividad</a>
                    </li>
                    <li class="nav-item p-lg-4 p-md-0 p-sm-0">
                        <a class="nav-link" href="contactanos.html">Contraciones</a>
                    </li>
                </ul>
              </div>
              <style>
                .sidebar-1 {
                    background: #F5F5F5; 
                    color: black;
                    padding: 2rem;
                    border-radius: 20px !important;
                }
                .active1 {
                    border-left: 3px solid #FB7125 !important;
                }
                .active2 {
                    border-left: 6px solid #F5F5F5 !important;
                }
                .active1 a{
                    padding-left: 3px !important;
                }
                .btn-outline-warning{
                        color: black !important;
                        border: black 1px solid;
                    }
                    .btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active{
                            background: #FB7125 !important;
                            border: #FB7125 1px solid;
                            
                    }
                    .contenido-form{
                        border-radius: 20px;
                        border: none; /* Remove the black border */
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08); /* Shadow effect */
                      
                        padding: 20px; /* Adjust padding as needed */
                    }
                    .amount-box{
                        gap: .3rem;
                    }
                    .menos{
                        background-image: url('/img/vector/menos.svg');
                        background-position: center;
                        background-size: cover;
                    }
                    .mas{
                        background-image: url('/img/vector/mas.svg');
                        background-position: center;
                        background-size: cover;
                    }
            </style>
        </nav>
    </header>
    <div class="container mt-lg-5 mb-lg-5 h-100">
        <div class="row justify-content-evenly">
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card border shadow p-0" style="min-width: 18rem; min-height: 18rem;">
                    <div class="card-header">
                    
                    </div>
                    <div class="card-body text-center">
                        <img src="img/vector/dueno.svg" class="" alt="dueno">
                        <br><br>
                        <h5 class="card-title">Dueño</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card border shadow p-0" style="min-width: 18rem; min-height: 18rem;">
                    <div class="card-header">
                     
                    </div>
                    <div class="card-body text-center">
                        <img src="img/vector/corredores.svg" class="" alt="corredores">
                        <br><br>
                        <h5 class="card-title">Corredores</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card border shadow p-0" style="min-width: 18rem; min-height: 18rem;">
                    <div class="card-header">
                   
                    </div>
                    <div class="card-body text-center">
                        <img src="img/vector/inversionista.svg" class="" alt="inversionista">
                        <br><br>
                        <h5 class="card-title">Inversionista</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>