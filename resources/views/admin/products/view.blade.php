@extends('admin.app')
@section('main')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevacategoria">
                Nuevo producto
            </button>
        </div>
        @if (session('productcreated'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('productcreated') }}</div>
        </div>
        @endif
        @if (session('productupdate'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('productupdate') }}</div>
        </div>
        @endif
        @if (session('productdisable'))
            <div class="alert alert-warning fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('categorydisable') }}</div>
            </div>
        @endif
        @if (session('productenable'))
            <div class="alert alert-success fade-out" role="alert">
                <h4 class="alert-title">Realizado con éxito</h4>
                <div class="text-secondary">{{ session('productenable') }}</div>
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('mis-productos') }}" method="get">
            @csrf
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="input-group col-12">
                        <select class="form-control col-2" name="criterio">
                            <option value="name">Nombre</option>
                            <option value="lastname">Apellidos</option>
                            <option value="document">Documento</option>
                            <option value="user">Usuario</option>
                        </select>
                        <input type="text" name="search" class="form-control" placeholder="Texto a buscar">
                   
                    </div>               
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <select class="form-control col-md-3" name="criterio">
                            <option value="name">Seleccione Distrito</option>
                            <option value="lastname">Apellidos</option>
                            <option value="document">Documento</option>
                            <option value="user">Usuario</option>
                        </select>                   
                    </div>               
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>                 
                    </div>               
                </div>
              
             
            </div>
        </form>
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>Habitaciones</th>     
                        <th>Garage</th>   
                        <th>M2</th>  
                        <th>Baños</th>  
                        <th>Precio</th>  
                        <th>Imagen</th>                 
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm edit-button" onclick="traerDataCategoria({{$item->id}})" data-id="{{ $item->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            &nbsp;
                            @if($item->status)
                                <form action="{{ route('inhabilitar.categoria', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('habilitar.categoria', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fas fa-check"></i> 
                                    </button>
                                </form>
                            @endif
                        </td>
                          
                        <td>{{ $item->rooms }}</td>       
                        <td>{{ $item->garage }}</td>  
                        <td>{{ $item->square_meters }}</td>  
                        <td>{{ $item->bathrooms }}</td>  
                        <td>{{ $item->price }}</td>  
                        <td>{{ $item->image }}</td>   
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
      </div>
    </div>
  </div>
<div class="modal fade" id="nuevacategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para crear un nuevo usuario -->
             
                
            </div>
            
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
                        <label for="name">Nombre categoría:</label>
                        <input type="text" class="form-control" id="categoryupdate" name="category">
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
                    $('#categoryupdate').val(categoria.category);
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