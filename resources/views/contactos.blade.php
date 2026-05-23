@extends('layouts.base')
@section('meta_title', 'Contactos')

@section('meta_description', $slider->meta_description)
@section('meta_keywords', $slider->meta_keywords)
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
                </div>

            <!-- Contacto Start -->
            <div class=" container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            <!-- TÍTULO -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-warning text-uppercase">Contáctanos</h5>
                <h1 class="mb-0">Estamos para ayudarte en tus necesidades financieras</h1>
            </div>

            <!-- INFORMACIÓN -->
            <div class="row g-5 mb-5">

                <!-- TELÉFONO -->
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Llámanos</h5>
                            <p class="text-dark mb-0">{{ $info->telefono }}</p>
                        </div>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Correo electrónico</h5>
                            <p class="text-dark mb-0">{{ $info->email }}</p>
                        </div>
                    </div>
                </div>

                <!-- DIRECCIÓN -->
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-warning d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Ubicación</h5>
                            <p class="text-dark mb-0">{{ $info->direccion }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-5">

                <!-- FORMULARIO -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="POST" action="{{ route('contacto.enviar') }}">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" name="nombre" class="form-control border-0 bg-light px-4"
                                    placeholder="Nombres completos" required style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="apellido" class="form-control border-0 bg-light px-4"
                                    placeholder="Apellidos completos" required style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="dni" class="form-control border-0 bg-light px-4"
                                    placeholder="Documento de Identificacion" required style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                    placeholder="Correo electrónico" required style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <input type="text" name="asunto" class="form-control border-0 bg-light px-4"
                                    placeholder="Asunto" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <textarea name="mensaje" class="form-control border-0 bg-light px-4 py-3" rows="4"
                                    placeholder="Escribe tu mensaje..." required></textarea>
                            </div>


                            <!-- PROTECCIÓN DE DATOS -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="politica">
                                    <label class="form-check-label small">
                                        He leído y acepto el
                                        <a href="{{ route('aviso_privacidad') }}" target="_blank">
                                            Aviso de Privacidad y Tratamiento de Datos Personales
                                        </a>.
                                    </label>
                                </div>
                            </div>


                            <!-- POLÍTICA -->

                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">
                                    Enviar Mensaje
                                </button>
                            </div>

                        </div>
                    </form>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- MAPA -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps?q=Pujilí%20Ecuador&output=embed"
                        style="min-height: 350px; border:0;" allowfullscreen>
                    </iframe>

                </div>

            </div>

        </div>
    </div>
    <!-- Contacto End -->
@endsection