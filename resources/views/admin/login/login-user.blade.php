@include('admin.layouts.header')

<div class="row g-0 flex-fill">
    <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center bg-white">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="./img/logo.png" height="90" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login Puja Inmobiliaria Usuario
                </h2>
                <form action="{{ route('sign-in-user') }}" method="POST" autocomplete="off" novalidate="">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Contraseña
                        </label>
                        <div class="input-group input-group-flat">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
    <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(./img/slide1.png);opacity: 0.6;"></div>
    </div>
</div>
@include('admin.layouts.footer')