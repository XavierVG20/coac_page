@extends('layouts.base')

@section('content')

<!-- HEADER -->
 @section('meta_title', 'Quejas y Reclamos')
@section('meta_description', $slider->meta_description)
@section('meta_keywords', $slider->meta_keywords)
@section('content')


    <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
            </div>

    <!-- Quejas y Reclamos Start -->
    <div class=" container-fluid py-1">
        <div class="container py-1">

            <!-- TITULO -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 700px;">
                <h5 class="fw-bold text-warning text-uppercase">Atención al Usuario</h5>
                <h1 class="mb-0">Quejas y Reclamos</h1>
                <p class="mt-3">
                    En la Cooperativa Pujilí estamos comprometidos con la mejora continua de nuestros servicios.
                </p>
            </div>

            <div class="row g-5">

                <!-- INFORMACIÓN -->
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="bg-light p-4 rounded shadow h-100">

                        <h4 class="text-dark mb-3">¿Cómo podemos ayudarte?</h4>

                        <p>
                            Si tienes alguna queja, reclamo o sugerencia, puedes enviarnos tu solicitud a través del
                            siguiente formulario.
                            Nuestro equipo dará seguimiento oportuno a tu caso.
                        </p>

                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="fa fa-check text-warning me-2"></i> Atención personalizada</li>
                            <li class="mb-2"><i class="fa fa-check text-warning me-2"></i> Respuesta oportuna</li>
                            <li class="mb-2"><i class="fa fa-check text-warning me-2"></i> Confidencialidad garantizada</li>
                        </ul>

                        <hr>

                        <p class="mb-1"><strong>Email:</strong> {{ $info->email }}</p>
                        <p class="mb-0"><strong>Teléfono:</strong> {{ $info->telefono }}</p>
                    </div>
                </div>

                <!-- FORMULARIO -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="bg-light p-4 rounded shadow">

                        <form action="#" method="POST">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <input type="text" name="nombre" class="form-control border-0 bg-white px-4"
                                        placeholder="Nombres " required style="height: 55px;">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="apellidos" class="form-control border-0 bg-white px-4"
                                        placeholder="Apellidos " required style="height: 55px;">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control border-0 bg-white px-4"
                                        placeholder="Correo electrónico" required style="height: 55px;">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="telefono" class="form-control border-0 bg-white px-4"
                                        placeholder="Teléfono" style="height: 55px;">
                                </div>

                                <div class="col-md-6">
                                    <select name="tipo" class="form-control border-0 bg-white px-4" style="height: 55px;">
                                        <option value="">Tipo de solicitud</option>
                                        <option value="queja">Queja</option>
                                        <option value="reclamo">Reclamo</option>
                                        <option value="sugerencia">Sugerencia</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="Agencias" class="form-control border-0 bg-white px-4" style="height: 55px;">
                                        <option value="">Agencias</option>
                                        <option value="queja">Queja</option>
                                        <option value="reclamo">Reclamo</option>
                                        <option value="sugerencia">Sugerencia</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="asunto" class="form-control border-0 bg-white px-4"
                                        placeholder="Asunto" style="height: 55px;">
                                </div>

                                <div class="col-12">
                                    <textarea name="mensaje" class="form-control border-0 bg-white px-4 py-3" rows="4"
                                        placeholder="Detalle de su solicitud" required></textarea>
                                </div>

                                <!-- PROTECCIÓN DE DATOS -->
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" required>
                                        <label class="form-check-label small">
                                            Declaro que he leído y acepto la política de protección de datos personales,
                                            y autorizo el tratamiento de mis datos para la gestión de esta solicitud.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-warning w-100 py-3 wow zoomIn" data-wow-delay="0.6s"
                                        type="submit">
                                        Enviar solicitud
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Quejas y Reclamos End -->

@endsection