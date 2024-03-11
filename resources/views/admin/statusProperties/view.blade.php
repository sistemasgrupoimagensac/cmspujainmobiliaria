@extends('admin.app')
@section('main')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevaestadopropiedad">
                Nuevo Estado de Propiedad
            </button>
        </div>
        @if (session('createstatusproperty'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('createstatusproperty') }}</div>
        </div>
        @endif
        @if (session('updatestatusproperty'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('updatestatusproperty') }}</div>
        </div>
        @endif
        @if (session('disablestatusproperty'))
            <div class="alert alert-warning fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('disablestatusproperty') }}</div>
            </div>
        @endif
        @if (session('enablestatusproperty'))
            <div class="alert alert-success fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('enablestatusproperty') }}</div>
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible mt-3" role="alert">
            <div class="d-flex">
                <div class="fs-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-exclamation-circle me-3" style="width: 30px; height: 30px;" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 9v4" /><path d="M12 16v.01" /></svg>
                </div>
                <div>
                    <h4 class="alert-title"><strong>Error:</strong> Por favor, corrige los siguientes errores.</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-secondary">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-6">
                <form action="{{ route('mis-estados-propiedad') }}" method="get">
                    @csrf
                     <div class="input-group">
                        <select class="form-control col-md-3" name="criterio">
                            <option value="name">Nombre</option>
                            <option value="description">Descripción</option>
                        </select>
                        <input type="text" name="search" class="form-control" placeholder="Texto a buscar">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </form>
                </div>
            </div>
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>Cateogria</th>      
                        <th>Descripción</th>                   
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statusProperty as $item)
                    <tr>
                        <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-ghost-warning btn-sm edit-button" onclick="traerDataStatysProperty({{$item->id}})" data-id="{{ $item->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            &nbsp;
                            @if($item->status)
                                <form action="{{ route('inhabilitar.categoria', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('habilitar.categoria', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-info btn-sm">
                                        <i class="fas fa-check"></i> 
                                    </button>
                                </form>
                            @endif
                            </div>
                        </td>
                        <td>{{ $item->name }}</td>   
                        <td>{{ $item->description }}</td>            
                        <td>
                            @if($item->status)
                                <span class="badge badge-success">Activo</span>
                            @else
                                <span class="badge badge-danger">Desactivado</span>
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
<div class="modal fade" id="nuevaestadopropiedad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuevaestadopropiedadLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nuevaestadopropiedadLabel">Agregar nuevo Estado de Propiedad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form action="{{ route('crear.estado-propiedad') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category">Nombre Estado de Propiedad:</label>
                        <input type="text" class="form-control" id="category" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción Estado de Propiedad:</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
      </div>
    </div>
  </div>
<!--Fin del modal-->
<!-- modal actualizar usuario-->
<div class="modal fade" id="actualizaryStatusPropertyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizaryStatusPropertyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizaryStatusPropertyModalLabel">Actualizar Estado de Propiedad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('actualizar.estado-propiedad') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="idstatusproperty" name="id">
                    <div class="form-group">
                        <label for="statuspropertyupdate">Nombre Estado de Propiedad:</label>
                        <input type="text" class="form-control" id="statuspropertyupdate" name="name">
                    </div>
                    <div class="form-group">
                        <label for="descriptionupdate">Descripción Estado de Propiedad:</label>
                        <input type="text" class="form-control" id="descriptionupdate" name="description">
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Fin del modal-->
</main>
@section('js')

<script>
    var traerDataStatysProperty = function(id){
        const URLDATADMIN=`status-property/${id}`;
        $.ajax({
            url: URLDATADMIN,
            method: 'GET',
            success: function(response) {
                var categoria = response;
                $('#idstatusproperty').val(categoria.id);
                $('#statuspropertyupdate').val(categoria.name);
                $('#descriptionupdate').val(categoria.description);
                $('#actualizaryStatusPropertyModal').modal('show');
            },
            error: function() {
                // Manejo de errores en caso de que la petición AJAX falle
                alert('Error en la solicitud AJAX.');
            }

        });
    };
    
</script>
@endsection
@endsection