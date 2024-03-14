<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="#">
                <img src="{{ asset('./img/logo-tanni.png') }}" height="40" alt="tanni" class="navbar-brand-image" />
            </a>
        </h1> --}}
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    {{-- {{Auth::user()->name}} --}}
                    <span class="avatar avatar-sm">
                        {{-- @if(Auth::user()->image !=null)
                            <img src="{{ asset('/storage/uploads/profiles/'. Auth::user()->image) }}" alt="Avatar del usuario">
                        @else --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>
                        {{-- @endif --}}
                    </span>
                    <div class="d-none d-xl-block ps-2">
                        {{-- <div>{{Auth::user()->name}} {{Auth::user()->lastname}}</div> --}}
                        {{-- <div class="mt-1 small text-secondary">{{ Auth::user()->rol->rol }}</div> --}}
                    </div>
                </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                    Cerrar sesión
                </a>
                <form id="logout-form" 
                action="{{ route('logout-admin') }}" 
                method="POST" style="display: none;">
                    @csrf
                </form>
            </div>    
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div>
        </div>
    </div>
</header>