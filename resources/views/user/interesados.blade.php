<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="header">
        <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">  <img src="img/logo.png" class="ms-4" alt=""></a>    
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
          <div class="collapse navbar-collapse w-100 justify-content-evenly text-center" id="navbarNav">
    
            <ul class="navbar-nav w-100 justify-content-evenly">
                <li>
                    <a href=""><img src="img/logo.png" class="ms-4 d-none d-sm-none d-md-none d-md-block d-lg-block" alt=""></a>
                </li>
                <li class="nav-item active p-lg-4 p-md-0 p-sm-0">
                    <a class="nav-link" href="{{ route('app') }}">Mis Avisos</a>
                </li>
                <li class="nav-item p-lg-4 p-md-0 p-sm-0 active">
                    <a class="nav-link" href="{{ route('alquiler') }}">Interesados</a>
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
    <div class="container">
        <div class="row align-items-top mt-5">
            <div class="col-4">
                <div class="rounded border-1 sidebar-1">
                    <ul class="nav nav-pills flex-column">
                        <li class="list-group-item active1"><a href="" class="text-decoration-none text-dark">Bandeja</a></li>
                        <li class="list-group-item active2"><a href="" class="text-decoration-none text-dark">Eliminado</a></li>
                        <li class="list-group-item active2"><a href="" class="text-decoration-none text-dark">Spam</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="input-group mb-3 border rounded-pill border-2">
                    <input type="text" class="form-control border rounded-pill border-2">
                    <span class="ps-1" id="basic-addon2"><img src="img/vector/search.svg" alt=""></span>
                </div>
                <div class=" contenido-form p-5">
                        <hr>
                        <div class="d-flex">
                            <div class="col input-group">
                                <img src="img/vector/mensaje.svg" alt="">
                                <span>Mensajes</span>
                            </div>
                            <div class="col input-group">
                                <img src="img/vector/telefono.svg" alt="">
                                <span>Consultas teléfono</span>
                            </div>
                            <div class="col input-group">
                                <img src="img/vector/whatsapp.svg" alt="">
                                <span>Consulta por whatsapp</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
  
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>