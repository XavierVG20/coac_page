@extends('layouts.base')
@section('meta_title', 'Nosotros')

@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)

@section('content')

    <!-- HEADER -->
    <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">

            </div>


    <!-- Misión, Visión y Video Start -->
    <div class=" container-fluid py-5">
        <div class="container py-5">

            <!-- TÍTULO -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h5 class="fw-bold text-warning text-uppercase">Nuestra Identidad{{ $slider->nombre }}</h5>
                <h1 class="mb-0">Misión, Visión y Nosotros</h1>
            </div>

            <div class="row g-5 align-items-center">

                <!-- VIDEO -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="position-relative">
                        <iframe class="w-100 rounded shadow" style="height: 350px;"
                            src="https://www.youtube.com/embed/VIDEO_ID" title="Video institucional" frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <!-- TEXTO -->
                <div class="col-lg-6">

                    <!-- MISIÓN -->
                    <div class="bg-white p-4 rounded shadow mb-4 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-dark">
                            <i class="fa fa-bullseye me-2"></i>Misión
                        </h4>
                        <p class="mb-0">
                            {{ $info->mision }}
                        </p>
                    </div>

                    <!-- VISIÓN -->
                    <div class="bg-white p-4 rounded shadow wow fadeInRight" data-wow-delay="0.5s">
                        <h4 class="text-dark">
                            <i class="fa fa-eye me-2"></i>Visión
                        </h4>
                        <p class="mb-0">
                            {{ $info->vision }}
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Misión, Visión y Video End -->
    <div class="container-fluid py-5 custom-offer-section"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/background-campo.jpg') }}');">
        <div class="container py-5">
            <!-- Título y Subtítulo con entrada desde arriba -->
            <div class="tsection-title  position-relative pb-3  text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h5>
                <h1 class="display-5 text-white mb-0">Te Ofrecemos</h1>
                <hr class="w-25 mx-auto bg-primary">
                <p class="text-white mt-3">Soluciones financieras diseñadas para fortalecer tu producción y hacer crecer tu
                    futuro.</p>
            </div>

            <div class="row g-5 text-center mb-5">
                <!-- Solvencia - Entrada desde la izquierda -->
                <div class="col-lg-4 border-end-custom wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="glass-icon mb-4">
                        <i class="fa fa-home text-primary fs-1"></i>
                    </div>
                    <h4 class="text-white mb-3">Solvencia</h4>
                    <p class="text-light-50">Ofrecemos tasas competitivas y accesibles para apoyar al sector agrícola y
                        fomentar la producción nacional.</p>
                </div>

                <!-- Transparencia - Entrada desde el centro/abajo -->
                <div class="col-lg-4 border-end-custom wow fadeInUp" data-wow-delay="0.5s">
                    <div class="glass-icon mb-4">
                        <i class="fa fa-bell text-primary fs-1"></i>
                    </div>
                    <h4 class="text-white mb-3">Transparencia</h4>
                    <p class="text-light-50">Diseñamos planes de pago según los tiempos de siembra, cosecha y
                        comercialización, facilitando el cumplimiento de tus obligaciones.</p>
                </div>

                <!-- Alta Rentabilidad - Entrada desde la derecha -->
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.7s">
                    <div class="glass-icon mb-4">
                        <i class="fa fa-layer-group text-primary fs-1"></i>
                    </div>
                    <h4 class="text-white mb-3">Alta rentabilidad</h4>
                    <p class="text-light-50">Brindamos acompañamiento especializado para optimizar el uso del crédito y
                        fortalecer tus capacidades productivas.</p>
                </div>
            </div>

            <!-- Panel Inferior Blanco - Zoom progresivo -->
            <div class="row g-0 bg-white rounded shadow-lg p-4 floating-panel mx-auto mt-5 wow zoomIn" data-wow-delay="0.9s"
                style="max-width: 900px;">
                <div class="col-md-4 text-center border-end">
                    <i class="fa fa-handshake text-primary fs-2 mb-2"></i>
                    <h6 class="mb-1">Confianza</h6>
                    <small class="text-muted">Comprometidos contigo</small>
                </div>
                <div class="col-md-4 text-center border-end">
                    <i class="fa fa-leaf text-primary fs-2 mb-2"></i>
                    <h6 class="mb-1">Desarrollo</h6>
                    <small class="text-muted">Impulsamos tu crecimiento</small>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa fa-shield-alt text-primary fs-2 mb-2"></i>
                    <h6 class="mb-1">Seguridad</h6>
                    <small class="text-muted">Tu tranquilidad es nuestra prioridad</small>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 bg-light overflow-hidden">
        <div class="container py-5">
            <!-- Título y Descripción -->
            <div class="row mb-5 align-items-center wow fadeInDown">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="line-yellow-pujili me-2"></div>
                        <span class="text-uppercase fw-bold text-muted small">Nuestra Historia</span>
                    </div>
                    <h1 class="display-5 fw-bold text-dark-blue">Línea de tiempo</h1>
                    <p class="text-muted">Conoce los hitos más importantes de nuestro crecimiento año tras año.</p>
                </div>
                <!-- Indicador de progreso de años (Superior Derecha) -->
                <div class="col-lg-5 d-flex justify-content-lg-end pt-3">
                    <div class="progress-indicator-top d-flex gap-2">
                        <div class="p-bar"></div>
                        <div class="p-bar"></div>
                        <div class="p-bar active"></div>
                        <div class="p-bar"></div>
                        <div class="p-bar"></div>
                    </div>
                </div>
            </div>

            <!-- Selector de Años Interactivo -->
            <div class="d-flex justify-content-center gap-3 flex-wrap mb-5">
              <button class="btn-year-capsule active wow zoomIn"
        data-idx="0"
        data-wow-delay="0.1s">
    2007
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="1"
        data-wow-delay="0.2s">
    2009
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="2"
        data-wow-delay="0.3s">
    2012
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="3"
        data-wow-delay="0.4s">
    2016
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="4"
        data-wow-delay="0.5s">
    2021
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="5"
        data-wow-delay="0.6s">
    2023
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="6"
        data-wow-delay="0.7s">
    2024
</button>

<button class="btn-year-capsule wow zoomIn"
        data-idx="7"
        data-wow-delay="0.8s">
    2025
</button>
            </div>

            <!-- Línea de Tiempo con Navegación -->
            <div class="timeline-visual-nav mb-5 wow fadeInUp" data-wow-delay="0.6s">
                <button class="nav-btn-circle" id="btnPrev"><i class="fa fa-arrow-left"></i></button>
                <div class="timeline-track-main">
                    <div class="timeline-fill-active" id="progressLine" style="width: 50%;"></div>
                    <!-- Marcadores fijos -->
                    <div class="marker-dot" style="left: 0%;"></div>
                    <div class="marker-dot" style="left: 11.33%;"></div>
                    <div class="marker-dot" style="left: 22.66%;"></div>
                    <div class="marker-dot" style="left: 33.33%;"></div>
                    <div class="marker-dot" style="left: 44.33%;"></div>
                    <div class="marker-dot" style="left: 55.33%;"></div>
                    <div class="marker-dot" style="left: 100%;"></div>
                    <!-- Marcador de posición actual (Igual a la imagen) -->
                    <div class="current-year-marker shadow" id="movingMarker" style="left: 50%;"></div>
                </div>
                <button class="nav-btn-circle" id="btnNext"><i class="fa fa-arrow-right"></i></button>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="history-card-pujili shadow-lg d-flex align-items-center wow zoomIn" id="mainHitoCard"
                        data-wow-delay="0.8s">
                        <div class="yellow-border-accent"></div>
                        <div class="p-4 p-md-5 flex-grow-1">
                            <span class="badge-year-label mb-2 d-inline-block" id="labelYear">2021</span>
                            <h2 class="fw-bold text-dark-blue mb-3" id="labelTitle">Expansión Regional</h2>
                            <p class="text-muted mb-4" id="labelDesc">Lanzamiento oficial de nuevas agencias y expansión de
                                nuestro impacto financiero en toda la región de Cotopaxi.</p>
                            <div class="d-flex align-items-center text-muted small fw-bold">
                                <i class="fa fa-map-marker-alt text-warning me-2"></i>
                                <span id="labelLoc">Pujilí, Ecuador</span>
                            </div>
                        </div>
                        <!-- Círculo de Icono -->
                        <div class="icon-circle-bg d-none d-md-flex me-5 shadow-sm">
                            <i class="fa fa-university text-warning" id="labelIcon" style="font-size: 2.5rem;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Track de posición inferior -->
            <div class="d-flex justify-content-center gap-2 mt-5">
                <div class="track-dot"></div>
                <div class="track-dot"></div>
                <div class="track-dot active"></div>
                <div class="track-dot"></div>
                <div class="track-dot"></div>
                <div class="track-dot"></div>
            </div>
        </div>
    </section>


@endsection