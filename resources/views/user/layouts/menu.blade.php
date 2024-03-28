<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative pt-3 " id="header">
        <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">  <img src="img/logo.png" class="ms-4" alt=""></a>    
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 justify-content-evenly text-center" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-evenly">
                <li class="nav-item ps-lg-4 pe-lg-4 p-md-0 p-sm-0">
                    <a href=" {{ route('app') }} "><img src="img/logo.png" class="ms-4 d-none d-sm-none d-md-none d-md-block d-lg-block" alt=""></a>
                </li>
                <li class="nav-item ps-lg-4 pe-lg-4 p-md-0 p-sm-0 
                @if(str_contains(Route::currentRouteName(), 'publicar')) active
                @endif">
                    <a class="nav-link" href="{{ route('publicar') }}">Publica Aquí</a>
                </li>
                <li class="nav-item ps-lg-4 pe-lg-4 pb-lg-0 p-md-0 p-sm-0 @if(str_contains(Route::currentRouteName(), 'mis-avisos')) active
                @endif">
                    <a class="nav-link" href="{{ route('mis-avisos') }}">Mis Avisos</a>
                </li>
                <li class="nav-item ps-lg-4 pe-lg-4 pb-lg-0 p-md-0 p-sm-0 @if(str_contains(Route::currentRouteName(), 'interesados')) active
                @endif">
                    <a class="nav-link" href="{{ route('interesados') }}">Mis Interesados</a>
                </li>
                <li class="nav-item ps-lg-4 pe-lg-4 pb-lg-0 p-md-0 p-sm-0">
                    <a class="nav-link" href="#">Mi Actividad</a>
                </li>
                <li class="nav-item ps-lg-4 pe-lg-4 pb-lg-0 p-md-0 p-sm-0">
                    <a class="nav-link" href="#">Contraciones</a>
                </li>
            </ul>
        </div>
 <hr>    
</nav>
   
</header>