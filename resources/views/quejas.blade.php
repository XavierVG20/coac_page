@extends('layouts.base')

@section('meta_title', 'Quejas y Reclamos')
@section('meta_description', $slider->meta_description)
@section('meta_keywords', $slider->meta_keywords)

@section('content')

<!-- HEADER -->
<div class="container-fluid bg-primary py-5 bg-header"
    style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');">
</div>

<!-- Quejas y Reclamos Start -->
<div class="container-fluid py-5 bg-light">

    <div class="container py-5">

        <!-- TITULO -->
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp"
            data-wow-delay="0.1s" style="max-width: 700px;">

            <h5 class="fw-bold text-warning text-uppercase">
                Atención al Usuario
            </h5>

            <h1 class="mb-3">
                Quejas y Reclamos
            </h1>

            <p class="mt-3 text-muted">
                En la Cooperativa Pujilí estamos comprometidos con la mejora continua
                de nuestros servicios.
            </p>

        </div>

        <div class="row g-5">

            <!-- INFORMACIÓN -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">

                <div class="p-4 rounded shadow h-100"
                    style="background:#ffffff; border-left:5px solid #D4A017;">

                    <h4 class="text-dark mb-3">
                        ¿Cómo podemos ayudarte?
                    </h4>

                    <p class="text-muted">
                        Si tienes alguna queja, reclamo o sugerencia, puedes enviarnos
                        tu solicitud a través del siguiente formulario.
                        Nuestro equipo dará seguimiento oportuno a tu caso.
                    </p>

                    <ul class="list-unstyled mt-4">

                        <li class="mb-3">
                            <i class="fa fa-check text-warning me-2"></i>
                            Atención personalizada
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-check text-warning me-2"></i>
                            Respuesta oportuna
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-check text-warning me-2"></i>
                            Confidencialidad garantizada
                        </li>

                    </ul>

                    <hr>

                    <p class="mb-2">
                        <strong>Email:</strong> {{ $info->email }}
                    </p>

                    <p class="mb-0">
                        <strong>Teléfono:</strong> {{ $info->telefono }}
                    </p>

                </div>

            </div>

            <!-- FORMULARIO -->
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">

                <div class="p-4 rounded shadow"
                    style="background:#ffffff;">

                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-3">

                            <!-- OPCIÓN ANÓNIMO -->
                            <div class="col-12">

                                <div class="form-check mb-2">

                                    <input class="form-check-input"
                                        type="checkbox"
                                        id="anonimoCheck">

                                    <label class="form-check-label fw-semibold"
                                        for="anonimoCheck">

                                        Enviar solicitud de forma anónima

                                    </label>

                                </div>

                                <div class="alert alert-warning small">
                                    Las solicitudes anónimas pueden limitar
                                    el seguimiento y respuesta personalizada.
                                </div>

                            </div>

                            <!-- DATOS PERSONALES -->
                            <div id="datosPersonales">

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input type="text"
                                            name="nombre"
                                            class="form-control border-0 bg-light px-4"
                                            placeholder="Nombres"
                                            required
                                            style="height: 55px;">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text"
                                            name="apellidos"
                                            class="form-control border-0 bg-light px-4"
                                            placeholder="Apellidos"
                                            required
                                            style="height: 55px;">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email"
                                            name="email"
                                            class="form-control border-0 bg-light px-4"
                                            placeholder="Correo electrónico"
                                            required
                                            style="height: 55px;">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text"
                                            name="telefono"
                                            class="form-control border-0 bg-light px-4"
                                            placeholder="Teléfono"
                                            style="height: 55px;">
                                    </div>

                                    <!-- IDENTIFICACIÓN -->
                                    <div class="col-md-12">
                                        <input type="text"
                                            name="identificacion"
                                            class="form-control border-0 bg-light px-4"
                                            placeholder="Número de identificación"
                                            style="height: 55px;">
                                    </div>

                                </div>

                            </div>

                            <!-- TIPO -->
                            <div class="col-md-6">

                                <select name="tipo"
                                    class="form-control border-0 bg-light px-4"
                                    style="height: 55px;"
                                    required>

                                    <option value="">
                                        Tipo de solicitud
                                    </option>

                                    <option value="queja">
                                        Queja
                                    </option>

                                    <option value="reclamo">
                                        Reclamo
                                    </option>

                                    <option value="sugerencia">
                                        Sugerencia
                                    </option>

                                </select>

                            </div>

                            <!-- AGENCIAS -->
                            <div class="col-md-6">

                                <select name="agencia"
                                    class="form-control border-0 bg-light px-4"
                                    style="height: 55px;">

                                    <option value="">
                                        Seleccione una agencia
                                    </option>

                                    <option value="matriz">
                                        Matriz
                                    </option>

                                    <option value="latacunga">
                                        Latacunga
                                    </option>

                                    <option value="saquisili">
                                        Salcedo
                                    </option>
                                      <option value="saquisili">
                                        La Mana
                                    </option>
                                       <option value="saquisili">
                                        Quito
                                    </option>

                                       <option value="saquisili">
                                        Pillaro
                                    </option>

                                </select>

                            </div>

                            <!-- ASUNTO -->
                            <div class="col-12">

                                <input type="text"
                                    name="asunto"
                                    class="form-control border-0 bg-light px-4"
                                    placeholder="Asunto"
                                    style="height: 55px;">

                            </div>

                            <!-- MENSAJE -->
                            <div class="col-12">

                                <textarea name="mensaje"
                                    class="form-control border-0 bg-light px-4 py-3"
                                    rows="5"
                                    placeholder="Detalle de su solicitud"
                                    required></textarea>

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

                            <!-- BOTÓN -->
                            <div class="col-12">

                                <button class="btn btn-warning w-100 py-3 fw-semibold"
                                    type="submit">

                                    <i class="fa fa-paper-plane me-2"></i>
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

<!-- SCRIPT ANÓNIMO -->
<script>

    const anonimoCheck = document.getElementById('anonimoCheck');
    const datosPersonales = document.getElementById('datosPersonales');

    anonimoCheck.addEventListener('change', function () {

        if (this.checked) {

            datosPersonales.style.display = 'none';

            datosPersonales.querySelectorAll('input').forEach(input => {
                input.required = false;
            });

        } else {

            datosPersonales.style.display = 'block';

            datosPersonales.querySelectorAll('input').forEach(input => {

                if (
                    input.name === 'nombre' ||
                    input.name === 'apellidos' ||
                    input.name === 'email'
                ) {
                    input.required = true;
                }

            });

        }

    });

</script>

@endsection