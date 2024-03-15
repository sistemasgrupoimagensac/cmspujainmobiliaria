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
                        <th>Distrito</th>  
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
                        <td class="text-center">{{ $item->categories->name }}</td>     
                        <td class="text-center">{{ $item->district->district }}</td>   
                        <td class="text-center">{{ $item->statusProperty->name }}</td>  
                        <td class="text-center">{{ $item->rooms }}</td>       
                        <td class="text-center">{{ $item->garage }}</td>  
                        <td class="text-center">{{ $item->square_meters }}</td>  
                        <td class="text-center">{{ $item->bathrooms }}</td>  
                        <td class="text-center">{{ $item->price }}</td>  
                        <td class="text-center">
                            <button type="button" class="btn btn-ghost-primary btn-sm" 
                            {{-- data-bs-toggle="modal" data-bs-target="#subirimagen"  --}}
                            data-id="{{ $item->id }}"
                                onclick="abrirModalSubirImagen({{ $item->id }})">
                                <i class="fa-solid fa-images"></i>
                            </button>
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
<div class="modal fade" id="subirimagen">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subirimagenLabel">Agregar nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form  method="POST" enctype="multipart/form-data" id="form-subir-imagen" name="form-subir-imagen">
                @csrf
                <input type="hidden" name="product_id" id="codigo_producto" value="">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Subir imagen</label>
                        <input type="file" name="image" id="image" class="form-control-file form-control" accept="image/*">
                    </div>
                    <div class="table-responsive table-sm" style="overflow-y: auto; max-height: 300px;">
                        <table class="table table-sm table-hover" id="tabla-imagenes">
                            <thead class="bg-orange2 text-white">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Imagen</th>
                                    <th class="text-center">Fecha y Hora</th>
                                    <th class="text-center">Ver</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Los datos de las imágenes se cargarán aquí dinámicamente -->
                            </tbody>
                        </table>
                    </div>
                </div>
          
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="guardarImagen(event)" >Guardar</button>
                </div>
            </form>
        </div>
    </div>
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
                            <label for="category_id">Categoria:</label>
                            <select class="form-select" id="category_id" name="category_id">
                                    @foreach ( $categories as $item)
                                        <option value="{{ $item->id }}">{{$item->name }}</option>
                                    @endforeach    
                            </select>   
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_property_id">Estado de la propiedad:</label>
                            <select class="form-select" name="status_property_id" id="status_property_id">
                                
                                    @foreach ( $status_property as $item)
                                        <option value="{{ $item->id }}">{{$item->name }}</option>
                                    @endforeach    
                            </select>  
                        </div>
                        <div class="form-group mb-3">
                            <label for="district_id">Distrito:</label>
                            <select class="form-select" name="district_id" id="district_id">
                                
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
<div class="modal fade" id="actualizarProductModal" data-bs-backdrop="static" data-bs-keyboard="false"aria-labelledby="actualizarProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actualizarProductModalLabel">Actualizar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('actualizar.producto') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="idproduct" name="id">
                    <div class="form-group mb-3">
                        <label for="product">Nombre Producto:</label>
                        <input type="text" class="form-control" id="updatename" name="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="updatecategoryid">Categoria:</label>
                        <select class="form-select" id="updatecategoryid" name="category_id">
                                @foreach ( $categories as $item)
                                    <option value="{{ $item->id }}">{{$item->name }}</option>
                                @endforeach    
                        </select>   
                    </div>
                    <div class="form-group mb-3">
                        <label for="updatestatuspropertyid">Estado de la propiedad:</label>
                        <select class="form-select" name="status_property_id" id="updatestatuspropertyid">
                            
                                @foreach ( $status_property as $item)
                                    <option value="{{ $item->id }}">{{$item->name }}</option>
                                @endforeach    
                        </select>  
                    </div>
                    <div class="form-group mb-3">
                        <label for="updatedistrictid">Distrito:</label>
                        <select class="form-select" name="district_id" id="updatedistrictid">
                            
                                @foreach ( $districts as $item)
                                    <option value="{{ $item->id }}">{{$item->district }}</option>
                                @endforeach    
                        </select>   
                    </div>
                    <div class="form-group mb-3">
                        <label for="rooms" >Habitaciones:</label>
                        <input type="number" class="form-control" name="rooms" id="updaterooms">
                    </div>
                    <div class="form-group mb-3">
                        <label for="garage" >Garage:</label>
                        <input type="number" class="form-control" name="garage" id="updategarage"> 
                    </div>
                    <div class="form-group mb-3">
                        <label for="square_meters" >Metros Cuadrados:</label>
                        <input type="number" class="form-control" name="square_meters" id="updatesquaremeters">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bathrooms" >Baños:</label>
                        <input type="number" class="form-control" name="bathrooms" id="updatebathrooms">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" >Precio:</label>
                        <input type="number" class="form-control" name="price" id="updateprice">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" >Descripción:</label>
                        <input type="text" class="form-control" name="description" id="updatedescription">
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
        const data=`product/${id}`;
        $.ajax({
            url: data,
            method: 'GET',
            success: function(response) {
                    var product = response;
                    $('#idproduct').val(product.id);
                    $('#updatename').val(product.name);
                    $('#updatecategoryid').val(product.category_id);
                    $('#updatestatuspropertyid').val(product.status_property_id);
                    $('#updatedistrictid').val(product.district_id);
                    $('#updaterooms').val(product.rooms);
                    $('#updategarage').val(product.garage);
                    $('#updatesquaremeters').val(product.square_meters);
                    $('#updatebathrooms').val(product.bathrooms);
                    $('#updateprice').val(product.price);
                    $('#updatedescription').val(product.description);
                    $('#actualizarProductModal').modal('show');
            },
            error: function() {
                // Manejo de errores en caso de que la petición AJAX falle
                alert('Error en la solicitud AJAX.');
            }

        });
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function abrirModalSubirImagen(codigo){
        const data=`image/${codigo}`;image
        $.ajax({
            url: data,
            method: 'GET',
            success: function(response) {
                $('#codigo_producto').val(codigo);
                var image = response;
                $('#tabla-imagenes tbody').empty();

                    // Iteramos sobre los datos de las imágenes y los agregamos a la tabla
                    $.each(image, function(index, image) {
                        var newRow = '<tr>' +
                                        '<td class="text-center">' + (index + 1) + '</td>' +
                                        '<td class="text-center">' + image.url_image + '</td>' +
                                        '<td class="text-center">' + image.updated_at + '</td>' +
                                        '<td class="text-center"><a href="' + '{{ asset("/storage/products/") }}' + '/'  + image.url_image + '" data-lightbox="roadtrip">Ver</a></td>' +
                                        '<td class="text-center"><button type="submit" class="btn btn-ghost-danger btn-sm"><i class="fas fa-trash"></i></button></td>' +'</tr>';
                        $('#tabla-imagenes tbody').append(newRow);
                    });

                $('#subirimagen').modal('show');
            },
            error: function() {
                // Manejo de errores en caso de que la petición AJAX falle
                alert('Error en la solicitud AJAX.');
            }
        });  
    }
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
<script>
    function guardarImagen(event) {
    event.preventDefault(); // Evitar el envío del formulario normal
    
    var formData = new FormData(document.getElementById('form-subir-imagen'));

    axios.post('/subir_imagen', formData)
        .then(function (response) {
            if (response.data.success) {
                abrirModalSubirImagen(response.data.data.product_id);
                console.log(response.data.message);
            } else {
                alert(response.data.message);
            }
        })
        .catch(function (error) {
            console.error('Error al subir la imagen:', error);
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script>
    lightbox.option({
        'resizeDuration': 50,
        'wrapAround': true,
        'showImageNumberLabel':true
    })
</script>

@endsection
@endsection