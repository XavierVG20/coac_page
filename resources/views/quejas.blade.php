@extends('layouts.base')

@section('meta_title', 'Quejas y Reclamos')
@section('meta_description', $slider->meta_description)
@section('meta_keywords', $slider->meta_keywords)

@section('content')

<!-- HEADER -->
<div class="container-fluid bg-primary py-5 bg-header"
    style="background-image: url('{{ $slider ? asset('uploads/sliders/'.$slider->imagen) : asset('img/Recurso 1.png') }}');">
</div>

<div class="container-fluid py-5 bg-light">

    <div class="container py-5">

        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto"
            style="max-width:700px;">

            <h5 class="fw-bold text-warning text-uppercase">
                Atención al Usuario
            </h5>

            <h1 class="mb-3">
                Quejas y Reclamos
            </h1>

            <p class="text-muted">
                En la Cooperativa de Ahorro y Crédito Pujilí Ltda.
                estamos comprometidos con la mejora continua de
                nuestros servicios.
            </p>

        </div>

        <div class="row g-5">

            <!-- INFORMACIÓN -->
            <div class="col-lg-5">

                <div class="bg-white shadow rounded p-4 h-100"
                    style="border-left:5px solid #D4A017;">

                    <h4 class="mb-3">
                        ¿Cómo podemos ayudarte?
                    </h4>

                    <p class="text-muted">

                        Si tienes una queja, reclamo o sugerencia,
                        puedes enviarnos tu solicitud mediante el
                        siguiente formulario.

                    </p>

                    <ul class="list-unstyled">

                        <li class="mb-2">
                            <i class="fa fa-check text-warning me-2"></i>
                            Atención personalizada
                        </li>

                        <li class="mb-2">
                            <i class="fa fa-check text-warning me-2"></i>
                            Seguimiento oportuno
                        </li>

                        <li class="mb-2">
                            <i class="fa fa-check text-warning me-2"></i>
                            Confidencialidad garantizada
                        </li>

                    </ul>

                    <hr>

                    <p>
                        <strong>Email:</strong>
                        {{ $info->email }}
                    </p>

                    <p>
                        <strong>Teléfono:</strong>
                        {{ $info->telefono }}
                    </p>

                </div>

            </div>

            <!-- FORMULARIO -->
            <div class="col-lg-7">

                <div class="bg-white shadow rounded p-4">

                    {{-- MENSAJE ÉXITO --}}
                    @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show">

                            {{ session('success') }}

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                            </button>

                        </div>

                    @endif

                    {{-- ERRORES --}}
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('quejas.store') }}"
                        method="POST">

                        @csrf

                        <!-- ANÓNIMO -->
                        <div class="form-check mb-3">

                            <input class="form-check-input"
                                type="checkbox"
                                id="anonimoCheck"
                                name="anonimo"
                                value="1">

                            <label class="form-check-label"
                                for="anonimoCheck">

                                Enviar solicitud de forma anónima

                            </label>

                        </div>

                        <div class="alert alert-warning small">

                            Las solicitudes anónimas pueden limitar
                            el seguimiento y respuesta personalizada.

                        </div>

                        <!-- DATOS PERSONALES -->
                        <div id="datosPersonales">

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <input type="text"
                                        name="nombre"
                                        value="{{ old('nombre') }}"
                                        class="form-control"
                                        placeholder="Nombres"
                                        required>

                                </div>

                                <div class="col-md-6">

                                    <input type="text"
                                        name="apellidos"
                                        value="{{ old('apellidos') }}"
                                        class="form-control"
                                        placeholder="Apellidos"
                                        required>

                                </div>

                                <div class="col-md-6">

                                    <input type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        class="form-control"
                                        placeholder="Correo electrónico"
                                        required>

                                </div>

                                <div class="col-md-6">

                                    <input type="text"
                                        name="telefono"
                                        value="{{ old('telefono') }}"
                                        class="form-control"
                                        placeholder="Teléfono">

                                </div>

                                <div class="col-md-12">

                                    <input type="text"
                                        name="identificacion"
                                        value="{{ old('identificacion') }}"
                                        class="form-control"
                                        placeholder="Número de identificación">

                                </div>

                            </div>

                        </div>

                        <div class="row g-3 mt-2">

                            <div class="col-md-6">

                                <select name="tipo"
                                    class="form-select"
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

                            <div class="col-md-6">

                                <select name="agencia"
                                    class="form-select">

                                    <option value="">
                                        Seleccione una agencia
                                    </option>

                                    <option value="matriz">
                                        Matriz Pujilí
                                    </option>

                                    <option value="latacunga">
                                        Latacunga
                                    </option>

                                    <option value="salcedo">
                                        Salcedo
                                    </option>

                                    <option value="la_mana">
                                        La Maná
                                    </option>

                                    <option value="quito_sur">
                                        Quito Sur
                                    </option>

                                    <option value="pillaro">
                                        Píllaro
                                    </option>

                                </select>

                            </div>

                            <div class="col-12">

                                <input type="text"
                                    name="asunto"
                                    value="{{ old('asunto') }}"
                                    class="form-control"
                                    placeholder="Asunto">

                            </div>

                            <div class="col-12">

                                <textarea
                                    name="mensaje"
                                    rows="5"
                                    class="form-control"
                                    placeholder="Detalle de la solicitud"
                                    required>{{ old('mensaje') }}</textarea>

                            </div>

                            <!-- POLÍTICA -->
                            <div class="col-12">

                                <div class="form-check">

                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="politica"
                                        value="1"
                                     >

                                    <label class="form-check-label">

                                        He leído y acepto el

                                        <a href="{{ route('aviso_privacidad') }}"
                                            target="_blank">

                                            Aviso de Privacidad y
                                            Tratamiento de Datos Personales

                                        </a>

                                    </label>

                                </div>

                                <small class="text-muted">

                                    Al enviar este formulario acepta
                                    el tratamiento de sus datos
                                    conforme a la Ley Orgánica de
                                    Protección de Datos Personales
                                    del Ecuador.

                                </small>

                            </div>

                            <div class="col-12">

                                <button type="submit"
                                    class="btn btn-warning w-100 py-3">

                                    <i class="fa fa-paper-plane me-2"></i>

                                    Enviar Solicitud

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const anonimoCheck =
        document.getElementById('anonimoCheck');

    const datosPersonales =
        document.getElementById('datosPersonales');

    anonimoCheck.addEventListener('change', function () {

        if(this.checked){

            datosPersonales.style.display = 'none';

            datosPersonales
                .querySelectorAll('input')
                .forEach(input => {

                    input.required = false;

                });

        }else{

            datosPersonales.style.display = 'block';

            document
                .querySelector('[name="nombre"]')
                .required = true;

            document
                .querySelector('[name="apellidos"]')
                .required = true;

            document
                .querySelector('[name="email"]')
                .required = true;
        }

    });

});

</script>

@endsection