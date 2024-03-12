<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
        </h1>
        <div class="text-center">
        </div>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                    </span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Max Sano</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!--
            menu en sí
        -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                        <a href="{{ url('/') }}">
                            <span class="nav-link-title">
                                <img src="{{ asset('img/logoblanco.png') }}" alt="">
                            </span>
                        </a>
                    </a>
                </li>
                <hr class="my-2">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Mantenimiento
                        </span>
                    </a>
                    <div class="dropdown-menu 
                    @if(str_contains(Route::currentRouteName(), 'mis-administradores')) show 
                    @elseif(str_contains(Route::currentRouteName(), 'mis-productos')) show 
                    @elseif(str_contains(Route::currentRouteName(), 'mis-categorias')) show 
                    @elseif(str_contains(Route::currentRouteName(), 'mis-estados-propiedad')) show 
                    @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item @if(str_contains(Route::currentRouteName(), 'mis-administradores')) active @endif" href="{{ route('mis-administradores') }}">
                                    Usuarios
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item  @if(str_contains(Route::currentRouteName(), 'mis-productos')) active @endif" href="{{ route('mis-productos') }}">
                                   Productos
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item  @if(str_contains(Route::currentRouteName(), 'mis-categorias')) active @endif" href="{{ route('mis-categorias') }}">
                                   Categorias
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item @if(str_contains(Route::currentRouteName(), 'mis-estados-propiedad')) active @endif" href="{{ route('mis-estados-propiedad') }}">
                                    Estado de propiedad
                                </a>
                            </div>
                        </div>
                    </div>
                </li> 
            </ul>
        </div>
    </div>
</aside>