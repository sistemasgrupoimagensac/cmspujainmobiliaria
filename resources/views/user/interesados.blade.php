@extends('user.app')
@section('main')
    <div class="container">
        <div class="row align-items-top mt-5">
            <div class="col-4">
                <div class="rounded border-1 sidebar-1">
                    <ul class="nav nav-pills flex-column">
                        <li class="list-group-item active1"><a href="" class="text-decoration-none text-dark">Bandeja</a></li>
                        <li class="list-group-item active2"><a href="" class="text-decoration-none text-dark">Eliminado</a></li>
                        <li class="list-group-item active2"><a href="" class="text-decoration-none text-dark">Spam</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="input-group mb-3 border rounded-pill border-2">
                    <input type="text" class="form-control border rounded-pill border-2">
                    <span class="ps-1" id="basic-addon2"><img src="img/vector/search.svg" alt=""></span>
                </div>
                <div class=" contenido-form p-5">
                        <hr>
                        <div class="d-flex">
                            <div class="col input-group">
                                <img src="img/vector/mensaje.svg" alt="">
                                <span>Mensajes</span>
                            </div>
                            <div class="col input-group">
                                <img src="img/vector/telefono.svg" alt="">
                                <span>Consultas teléfono</span>
                            </div>
                            <div class="col input-group">
                                <img src="img/vector/whatsapp.svg" alt="">
                                <span>Consulta por whatsapp</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection