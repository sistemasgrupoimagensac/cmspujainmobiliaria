@extends('admin.app')
@section('main')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevacategoria">
                Nueva categoría
            </button>
        </div>
        @if (session('createcategory'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('createcategory') }}</div>
        </div>
        @endif
        @if (session('updatecategory'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('updatecategory') }}</div>
        </div>
        @endif
        @if (session('disablecategory'))
            <div class="alert alert-warning fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('disablecategory') }}</div>
            </div>
        @endif
        @if (session('enablecategory'))
            <div class="alert alert-success fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('enablecategory') }}</div>
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
            <div class="form-group row mb-3">
                <div class="col-md-6">
                <form action="{{ route('mis-categorias') }}" method="get">
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
                    @foreach($categories as $category)
                    <tr>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-ghost-warning btn-sm edit-button" onclick="traerDataCategoria({{$category->id}})" data-id="{{ $category->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            &nbsp;
                            @if($category->status)
                                <form action="{{ route('inhabilitar.categoria', ['id' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('habilitar.categoria', ['id' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-info btn-sm">
                                        <i class="fas fa-check"></i> 
                                    </button>
                                </form>
                            @endif
                            </div>
                        </td>
                        <td>{{ $category->name }}</td>   
                        <td>{{ $category->description }}</td>            
                        <td>
                            @if($category->status)
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
<div class="modal fade" id="nuevacategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuevacategoriaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nuevacategoriaLabel">Agregar nueva categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form action="{{ route('crear.categoria') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category">Nombre Categoría:</label>
                        <input type="text" class="form-control" id="category" name="category">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción Categoría:</label>
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
<div class="modal fade" id="actualizarCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizarCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarCategoryModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('actualizar.categoria') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="idcategoria" name="id">
                    <div class="form-group">
                        <label for="categoryupdate">Nombre categoría:</label>
                        <input type="text" class="form-control" id="categoryupdate" name="category">
                    </div>
                    <div class="form-group">
                        <label for="descriptionupdate">Descripción categoría:</label>
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
    var traerDataCategoria = function(id){
        const URLDATADMIN=`category/${id}`;
        $.ajax({
            url: URLDATADMIN,
            method: 'GET',
            success: function(response) {
                var categoria = response;
                $('#idcategoria').val(categoria.id);
                $('#categoryupdate').val(categoria.name);
                $('#descriptionupdate').val(categoria.description);
                $('#actualizarCategoryModal').modal('show');
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