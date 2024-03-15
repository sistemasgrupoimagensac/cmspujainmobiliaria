@include('admin.layouts.header')
<div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark">
        <img src="./img/logo.png" width="210" height="100" alt="Tabler" class="navbar-brand-image">
      </a>
    </div>
    <form class="card card-md" action="{{ route('registerUser') }}" method="get" autocomplete="off" novalidate="">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                Por favor, completa todos los campos.
            </div>
        @endif
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Crear una cuenta nueva</h2>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Enter name">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" name="email" class="form-control" placeholder="Enter email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de nacimiento</label>
          <label class="form-label">
            <input type="date" name="birthdate"  class="form-control">
          </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <div class="input-group input-group-flat">
              <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
              <span class="input-group-text">
                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                </a>
              </span>
            </div>
          </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Crear cuenta nueva</button>
        </div>
      </div>
    </form>
    <div class="text-center text-secondary mt-3">
      ¿Ya tienes una cuenta? <a href="{{ route('showLoginFormUser') }}" tabindex="-1">Ingresa</a>
    </div>
  </div>
  @include('admin.layouts.footer')