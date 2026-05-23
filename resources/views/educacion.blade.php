@extends('layouts.base')
@section('meta_title', 'Educacion')


@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)

@section('content')
     <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>
<!-- Educación Financiera Start -->
<section class="py-5 bg-white overflow-hidden position-relative">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="badge-education mb-3 d-inline-flex align-items-center">
                    <i class="fa fa-graduation-cap me-2"></i> EDUCACIÓN FINANCIERA
                </div>
                
                <h1 class="display-4 fw-bold text-dark-blue mb-4 leading-tight">
                    Aprende a manejar tu dinero de <br>
                    <span class="text-warning position-relative text-underline-custom">forma inteligente</span>
                </h1>
                
                <p class="text-muted lead mb-5 fs-6" style="max-width: 520px;">
La Cooperativa Pujilí promueve la educación financiera de sus socios y clientes mediante el uso de la plataforma virtual de la COSEDE.

En esta plataforma podrás acceder a cursos interactivos, material educativo y herramientas prácticas que te ayudarán a mejorar la administración de tus finanzas personales.

Aprende sobre ahorro, inversión, uso responsable del crédito y planificación financiera de manera sencilla y accesible desde cualquier lugar.                </p>

                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="pilar-card">
                            <div class="pilar-icon bg-blue-soft"><i class="fa fa-book-open text-primary-pujili"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Aprende a tu ritmo</h6>
                            <p class="small text-muted mb-0">Accede a cursos y materiales cuando y donde quieras.</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-start-custom">
                        <div class="pilar-card">
                            <div class="pilar-icon bg-green-soft"><i class="fa fa-chart-line text-success"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Mejora tus finanzas</h6>
                            <p class="small text-muted mb-0">Toma decisiones informadas y alcanza tus metas.</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-start-custom">
                        <div class="pilar-card">
                            <div class="pilar-icon bg-purple-soft"><i class="fa fa-shield-alt text-purple"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Tu futuro, tu tranquilidad</h6>
                            <p class="small text-muted mb-0">Planifica hoy para vivir un mañana con seguridad financiera.</p>
                        </div>
                    </div>
                </div>

                <a href="https://educate.cosede.gob.ec/" target="_blank"  class="btn btn-warning btn-pujili-action py-3 px-5 rounded-pill fw-bold shadow transition-btn">
                    Acceder a la Plataforma <i class="fa fa-arrow-right ms-2 fs-6"></i>
                </a>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="position-relative rounded-custom-banner shadow-lg overflow-hidden text-white">
                                       <img class="img-fluid rounded shadow"  style="height: 450px; width:auto" src="{{ asset('img/educacion-financiera.png') }}" alt="Educación Financiera">

                </div>
            </div>

        </div>

        <div class="row mt-5 pt-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-12">
                <div class="bg-light p-4 rounded-4 d-flex align-items-center border-start border-warning border-4 shadow-sm position-relative overflow-hidden">
                    <div class="alert-info-circle me-4"><i class="fa fa-info text-warning fs-5"></i></div>
                    <p class="mb-0 text-dark-blue fw-medium flex-grow-1" style="font-size: 14px;">
                        La educación financiera te da el poder de tomar mejores decisiones hoy para construir el mañana que sueñas.
                    </p>
                    <div class="graduation-cap-vector d-none d-lg-block">
                        <i class="fa fa-graduation-cap text-warning opacity-25" style="font-size: 5rem;"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
