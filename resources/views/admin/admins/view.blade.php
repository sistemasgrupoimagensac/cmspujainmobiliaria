@extends('admin.app')
@section('main')

<div class="container-fluid">
    @if (session('usercreated'))
        <div class="alert alert-success fade-out mt-3" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('usercreated') }}</div>
        </div>
    @endif
    @if (session('userupdate'))
        <div class="alert alert-success fade-out mt-3 role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('userupdate') }}</div>
        </div>
    @endif

    @if (session('userdisable'))
        <div class="alert alert-warning fade-out mt-3" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('userdisable') }}</div>
        </div>
    @endif

    @if (session('userenable'))
        <div class="alert alert-success fade-out mt-3" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('userenable') }}</div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Error:</strong> Por favor, corrige los siguientes errores.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex align-items-center w-100">
                <h2 class="card-title col">Administradores</h2>
                <button type="button" class="btn btn-primary col-auto ms-auto" data-bs-toggle="modal" data-bs-target="#nuevoUsuario">
                    Nuevo
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-6">
                    <form action="{{ route('mis-administradores') }}" method="get" class="mb-3">
                        <div class="input-group">
                            <select class="form-select col-md-3" name="criterio">
                                <option value="name" @if(request()->get('criterio') == 'name') selected @endif>Nombre</option>
                                <option value="user" @if(request()->get('criterio') == 'email') selected @endif>Email</option>
                            </select>
                            <input type="text" name="search" class="form-control" placeholder="Texto a buscar" value="{{ request()->get('search') }}">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Contraseña</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <button type="button" class="btn btn-ghost-warning btn-sm edit-button" onclick="traerDataAdmin({{$user->id}})" data-id="{{ $user->id }}">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                @if($user->status)
                                    <form action="{{ route('inhabilitar.administrador', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-ghost-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('habilitar.administrador', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-ghost-info btn-sm">
                                            <i class="fas fa-check"></i> 
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="#" onclick="cambioContrasena( {{$user->id}} )">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                            </a>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            @if($user->status)
                                <span class="badge bg-success-lt">Activo</span>
                            @else
                                <span class="badge bg-danger-lt">Desactivado</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>

        </div>
    </div>
    <!-- Fin ejemplo de tabla Listado -->
</div>

<!-- Modal para crear un nuevo usuario -->
<div class="modal fade" id="nuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuevoUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoUsuarioLabel">Nuevo Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('crear.administrador') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nombres:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>                
                    <div class="form-group mb-3">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <!-- Agrega más campos del formulario aquí -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>              
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal actualizar usuario-->
<div class="modal fade" id="actualizarUsuarioModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizarUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarUsuarioModalLabel">Actualizar Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('actualizar.administrador') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT') <!-- Usar el método HTTP PUT para actualizar -->
                    <input type="hidden" id="iduser" name="id">
                    <div class="form-group mb-3">
                        <label for="name">Nombres:</label>
                        <input type="text" class="form-control" id="updatename" name="name">
                    </div>            
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="updateemail" name="email">
                    </div>
                </div>
                <!-- Agregar los campos que desees actualizar -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal para cambiar la clave -->
<div class="modal fade" id="modalCambiarClave" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCambiarClaveLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalCambiarClaveLabel">Cambiar contraseña</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('cambiar.clave') }}">
            <div class="modal-body">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="idchangepass">
            <div class="form-group">
                <label for="new_password">Nueva Clave</label>
                <input type="password" name="passwordchangepassword" id="new_password" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
  </div>
</div>

</main>
@section('js')
<script>
    var cambioContrasena= function (id){
        const URLDATADMIN=`user/${id}`;
        $.ajax({
            url: URLDATADMIN,
            method: 'GET',
            success: function(response) {
                    var user = response; 
                    $('#idchangepass').val(user.id);
                    $('#modalCambiarClave').modal('show');     
            },
            error: function() {
                alert('Error en la solicitud AJAX.');
            }
        });
    };
</script>

<script>
    var traerDataAdmin = function(id){
        const URLDATADMIN=`user/${id}`;
        $.ajax({
            url: URLDATADMIN,
            method: 'GET',
            success: function(response) {
                    var user = response;
                    $('#iduser').val(user.id);
                    $('#updatename').val(user.name);
                    $('#updateemail').val(user.email);
                    $('#actualizarUsuarioModal').modal('show');
            },
            error: function() {
                alert('Error en la solicitud AJAX.');
            }

        });
    };
</script>
@endsection

@endsection