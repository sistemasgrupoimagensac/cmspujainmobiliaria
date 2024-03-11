@extends('admin.app')
@section('main')

<div class="container-fluid">
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
            <div class="text-secondary">{{ session('productdisable') }}</div>
        </div>
    @endif
    @if (session('productenable'))
        <div class="alert alert-success fade-out" role="alert">
            <h4 class="alert-title">Realizado con éxito</h4>
            <div class="text-secondary">{{ session('productenable') }}</div>
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
    <style>
        .select-category, .select-status-property, .select-district {
  z-index: 1040 !important ;/* Adjust as needed */
}</style>
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center w-100">
                <h2 class="card-title col">Mis Productos</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoproducto">
                    Nuevo producto
                </button>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('mis-productos') }}?criterio={{ $criterio }}&search={{ $search }}&district_id={{ $districtId }}&status_property_id={{ $statusPropertyId}}&category_id={{ $categoryId }}" method="get" class="mb-3">   
                <div class="form-group row align-items-center justify-content-between d-flex">
                    <div class="col-md-3">
                        <div class="input-group col-12">
                            <select class="form-control col-2" name="criterio" value="{{ $criterio }}">
                                <option value="name">Producto</option>
                                <option value="rooms">Habitaciones</option>
                            </select>
                            <input type="text" name="search" class="form-control" value="{{ $search }}" placeholder="Texto a buscar">
                        </div>               
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <select class="js-example-basic-single w-100 h-100" name="district_id" aria-placeholder="Seleccione Distrito">
                            <option selected value="">Seleccione Distrito</option>
                                @foreach ( $districts as $item)
                                    <option value="{{ $item->id }}" {{ isset($districtId) && $districtId == $item->id ? 'selected' : '' }}>{{$item->district }} </option>
                                @endforeach    
                            </select>              
                        </div>              
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <select class="js-example-basic-single w-100 h-100 form-select" name="status_property_id" aria-placeholder="Seleccione Distrito">
                            <option selected value="">Seleccione Estado de propiedad</option>
                                @foreach ( $status_property as $item)
                                    <option value="{{ $item->id }}" {{ isset($statusPropertyId) && $statusPropertyId == $item->id ? 'selected' : '' }}>{{$item->name }}</option>
                                @endforeach    
                            </select>              
                        </div>              
                    </div>
                       <div class="col-md-2">
                        <div class="input-group">
                            <select class="js-example-basic-single w-100 h-100" name="category_id" aria-placeholder="Seleccione Distrito">
                            <option selected value="">Seleccione Categoría</option>
                                @foreach ( $categories as $item)
                                    <option value="{{ $item->id }}" {{ isset($categoryId) && $categoryId == $item->id ? 'selected' : '' }}>{{$item->name }}</option>
                                @endforeach    
                            </select>              
                        </div>              
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>                 
                        </div>               
                    </div> 
            </form>
        </div>
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>Producto</th>  
                        <th>Categoría</th>  
                        <th>Estado de propiedad</th>  
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
                            <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-ghost-warning btn-sm edit-button" onclick="traerDataCategoria({{ $item->id }})" data-id="{{ $item->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                   
                            @if($item->status)
                                <form action="{{ route('inhabilitar.producto', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('habilitar.producto', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-ghost-info btn-sm">
                                        <i class="fas fa-check"></i> 
                                    </button>
                                </form>
                            @endif
                            </div>
                        </td>
                        <td class="text-center">{{ $item->name }}</td>   
                        <td class="text-center">{{ $item->district->name }}</td>   
                        <td class="text-center">{{ $item->statusProperty->name }}</td>  
                        <td class="text-center">{{ $item->rooms }}</td>       
                        <td class="text-center">{{ $item->garage }}</td>  
                        <td class="text-center">{{ $item->square_meters }}</td>  
                        <td class="text-center">{{ $item->bathrooms }}</td>  
                        <td class="text-center">{{ $item->price }}</td>  
                        <td class="text-center"> 
                            <span class="avatar" style="background-image: url({{ asset('storage/products/' . $item->image) }})"></span>
                        </td>   
                        <td class="text-center">
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
<div class="modal fade" id="nuevoproducto" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="nuevoproductoLabel">Agregar nuevo Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="{{ route('crear.producto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="product">Nombre Producto:</label>
                            <input type="text" class="form-control" id="product" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="select-category">Categoria:</label>
                            <select class="select-category w-100 h-100" id="select-category" name="category_id">
                                
                                    @foreach ( $categories as $item)
                                        <option value="{{ $item->id }}">{{$item->name }}</option>
                                    @endforeach    
                            </select>   
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_property_id">Estado de la propiedad:</label>
                            <select class="select-status-property w-100 h-100" name="status_property_id" id="status_property_id">
                                
                                    @foreach ( $status_property as $item)
                                        <option value="{{ $item->id }}">{{$item->name }}</option>
                                    @endforeach    
                            </select>  
                        </div>
                        <div class="form-group mb-3">
                            <label for="district_id">Distrito:</label>
                            <select class="select-district w-100 h-100" name="district_id" id="district_id">
                                
                                    @foreach ( $districts as $item)
                                        <option value="{{ $item->id }}">{{$item->district }}</option>
                                    @endforeach    
                            </select>   
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Habitaciones:</label>
                            <input type="number" class="form-control" name="rooms">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Garage:</label>
                            <input type="number" class="form-control" name="garage"> 
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Metros Cuadrados:</label>
                            <input type="number" class="form-control" name="square_meters">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Baños:</label>
                            <input type="number" class="form-control" name="bathrooms">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Precio:</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Descripción:</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" >Imagen:</label>
                            <input type="file" class="form-control" name="image" accept="iamge/*">
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
</div>

<!--Fin del modal-->
<!-- modal actualizar usuario-->
<div class="modal fade" id="actualizarCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false"aria-labelledby="actualizarCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarCategoryModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('actualizar.producto') }}" method="POST" enctype="multipart/form-data">
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
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.select-district').select2();
        $('.select-status-property').select2();
        $('.select-category').select2();
    });
</script>
@endsection
@endsection