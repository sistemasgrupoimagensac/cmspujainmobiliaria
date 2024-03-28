@extends('user.app')
@section('main')
    <div class="container">
        <div class="row  mt-5 ps-1 pe-1">
            @foreach ($mis_avisos as $item)
            <div class="row col-12 contenido-form mt-5">
                <div class="d-flex col-lg-6 col-md-12 col-sm-12 border-end border-2 align-items-center justify-content-center">
                    <div class="col-1 d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                        <img src="img/casa.png" class="p-4" alt="">
                    </div>

                    <div class="col-lg-7 col-md-6 ">
                        <span>Casa</span><br>
                        <span>HABITACION INDEPENDIENTE</span> <br>
                        <span>San Isidro</span><br>
                        <span>Temporal</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 ps-4">
                    <span>Desempeño</span>
                    <div class="row border border-2 rounded-4 h-75">
                        <div class="col-lg-4 col-md-12 col-sm-12 border-end border-lg-2 border-md-none border-sm-none mb-3 mb-lg-0">
                            <span>Exposicion</span>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 border-end border-lg-2 border-md-none border-sm-none mb-3 mb-lg-0">
                            <span>Visualizaciones</span>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-3 mb-lg-0">
                            <span>Interesados</span>
                        </div>
                    </div>
                </div>
                <hr class="">
                <div class="row col-lg-12 col-md-12 col-sm-12 justify-content-between align-items-center text-center text-md-center text-lg-end">
                    <div class="d-flex col-lg-6 col-md-12 col-sm-12 text-sm-center text-md-center flex-column flex-sm-row justify-content-center">
                        <span class="ps-lg-0">Código <strong>5dg7fe5</strong></span>
                        <span class="ps-lg-5">ID <strong>5dg7fe5</strong></span>
                        <span class="ps-lg-5">Creado <strong>18/03/2024</strong></span>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <i class=""><img src="img/vector/play.svg" alt="play"></i>
                        <i class="ps-lg-5"><img src="img/vector/editar.svg" alt="editar"></i>
                        <i class="ps-lg-5"><img src="img/vector/link.svg" alt="link"></i>
                        <i class="ps-lg-5"><img src="img/vector/trash.svg" alt="trash"></i>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
@endsection
