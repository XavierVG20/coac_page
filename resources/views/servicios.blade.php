@extends('layouts.base')
@section('meta_title', 'Servicios')

@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)
@section('content')


       <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>

<!-- Productos Financieros Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-0">

        <!-- TÍTULO -->
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 650px;">
            <h5 class="fw-bold text-warning text-uppercase">Nuestros Productos</h5>
            <h1 class="mb-0">Soluciones Financieras para Tu Bienestar</h1>
        </div>

        <div class="row g-5 align-items-center">

            <!-- IZQUIERDA -->
            <div class="col-lg-4">
                <div class="row g-4">

                    <!-- CRÉDITOS -->
                    <div class="col-12 producto-item wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <i class="fa fa-coins"></i>
                        </div>
                        <h5>Créditos</h5>
                        <p>
                            Ofrecemos créditos productivos, de consumo y educativos con tasas accesibles
                            para impulsar tus proyectos personales y negocios.
                        </p>
                       
                        <a href="{{ route('creditos') }}" class="btn btn-outline-warning btn-sm"> Ver más</a>
                    </div>

                    <!-- AHORROS -->
                    <div class="col-12 producto-item wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <i class="fa fa-piggy-bank"></i>
                        </div>
                        <h5>Ahorros</h5>
                        <p>
                            Cuentas de ahorro seguras que te permiten administrar tu dinero con confianza
                            y disponibilidad inmediata.
                        </p>
                        <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modalAhorro">
                            Ver más
                        </button>
                    </div>

                </div>
            </div>

            <!-- CENTRO -->
            <div class="col-lg-4 text-center wow zoomIn" data-wow-delay="0.3s">
                <div class="imagen-wrapper">

                    <div class="fondo-decorativo"></div>

                    <img src="{{ asset('img/servicios-financieros.jpg') }}"
                        alt="Servicios Financieros"
                        class="img-fluid imagen-financiera">

                </div>
            </div>

            <!-- DERECHA -->
            <div class="col-lg-4">
                <div class="row g-4">

                    <!-- INVERSIONES -->
                    <div class="col-12 producto-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h5>Inversiones</h5>
                        <p>
                            Incrementa tu capital con certificados de depósito e inversiones seguras
                            con rentabilidad competitiva.
                        </p>
                        
                        <a href="{{ route('inversiones') }}" class="btn btn-outline-warning btn-sm"> Ver más</a>
                    </div>

                    <!-- SERVICIOS -->
                    <div class="col-12 producto-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <i class="fa fa-headset"></i>
                        </div>
                        <h5>Servicios</h5>
                        <p>
                            Brindamos atención personalizada, asesoría financiera y servicios digitales
                            para una mejor experiencia de nuestros socios.
                        </p>
                       
                        <a class="btn btn-outline-warning btn-sm" href="{{ route('servicios') }}">Ver más</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Productos Financieros End -->

<div class="container-fluid py-5 bg-light">
        <div class="container py-5">

            <!-- TÍTULO -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInDown" data-wow-delay="0.2s"
                style="max-width: 700px;">
                <h5 class="fw-bold text-warning text-uppercase">Nuestros Productos</h5>
                <h1 class="mb-0">Tu dinero seguro y siempre disponible</h1>
                <p class="text-muted"><i class="fa fa-circle text-primary small me-2"></i>Seguridad, confianza y beneficios
                    que te acompañan siempre.<i class="fa fa-circle text-primary small ms-2"></i></p>

            </div>

            <div class="row g-5">
                <!-- Columna Izquierda: Imagen y Cuadro de Apertura -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="position-relative h-100 rounded overflow-hidden shadow-lg bg-white">
                        <img class="img-fluid w-100 h-100" src="{{ asset('img/ahorros.jpg') }}" alt="Ahorro Cooperativa"
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-between p-4"
                            style="background: linear-gradient(to right, rgba(255, 255, 255, 0) 30%, transparent 100%);">
                            
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Beneficios y CTA -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-white shadow rounded-circle me-3">
                            <i class="fa fa-shield-alt text-primary fs-4"></i>
                        </div>
                        <h2 class="mb-0">Ahorra <span class="text-primary">con confianza</span></h2>
                    </div>
                    <p class="mb-4">En nuestra cooperativa te ofrecemos cuentas de ahorro seguras, con disponibilidad
                        inmediata y beneficios exclusivos para nuestros socios.</p>

                    <!-- Lista de Beneficios -->
                    <div class="benefit-list mb-5">
                        <div
                            class="d-flex align-items-center bg-white shadow-sm rounded p-3 mb-3 border-start border-primary border-4">
                            <div class="btn-sm-square bg-light rounded-circle me-3">
                                <i class="fa fa-coins text-primary"></i>
                            </div>
                            <h6 class="mb-0">Sin costos ocultos</h6>
                        </div>
                        <div class="d-flex align-items-center bg-white shadow-sm rounded p-3 mb-3">
                            <div class="btn-sm-square bg-light rounded-circle me-3">
                                <i class="fa fa-clock text-primary"></i>
                            </div>
                            <h6 class="mb-0">Acceso inmediato a tu dinero</h6>
                        </div>
                        <div class="d-flex align-items-center bg-white shadow-sm rounded p-3 mb-3">
                            <div class="btn-sm-square bg-light rounded-circle me-3">
                                <i class="fa fa-lock text-primary"></i>
                            </div>
                            <h6 class="mb-0">Seguridad y respaldo financiero</h6>
                        </div>
                        <div class="d-flex align-items-center bg-white shadow-sm rounded p-3">
                            <div class="btn-sm-square bg-light rounded-circle me-3">
                                <i class="fa fa-bullseye text-primary"></i>
                            </div>
                            <h6 class="mb-0">Ideal para metas personales</h6>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="d-flex align-items-center">
                       
                        <div class="d-flex align-items-center text-muted">
                            <i class="fa fa-user-shield fs-4 me-2"></i>
                            <span class="small">Tu dinero está protegido</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 savings-section" style="background-color: #f8f9fa;">
        <div class="container py-5">

            <!-- SECCIÓN SUPERIOR: TARJETAS DE CUENTAS -->
            <div class="row g-4 mb-5">
                <!-- Cuenta Ahorro Infantil -->
                <div class="col-lg-6">
                    <div class="saving-card card-orange h-100 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-4">
                            <!-- Imagen de niño/bebé desde internet -->
                            <img src="https://images.unsplash.com/photo-1519689689358-09705f93ef54?q=80&w=150&h=150&auto=format&fit=crop"
                                alt="Ahorro Infantil" class="account-icon rounded-circle me-3">
                            <div>
                                <h3 class="mb-1 text-dark">Ahorro Infantil</h3>
                                <p class="mb-0 text-muted">Fomenta el hábito del ahorro desde temprana edad.</p>
                            </div>
                        </div>
                        <hr class="w-25 border-orange mb-4">
                        <ul class="list-unstyled checklist orange-checks mb-0">
                            <li><i class="fa fa-check-circle me-2"></i>Apertura desde bajo monto</li>
                            <li><i class="fa fa-check-circle me-2"></i>Control por representante</li>
                            <li><i class="fa fa-check-circle me-2"></i>Incentivo al ahorro</li>
                        </ul>
                        <!-- Imagen decorativa: Alcancía -->
                        <img src="https://cdn-icons-png.flaticon.com/512/2331/2331940.png" alt="Alcancia"
                            class="floating-illustration illustration-piggy">
                    </div>
                </div>

                <!-- Cuenta de Ahorros -->
                <div class="col-lg-6">
                    <div class="saving-card card-blue h-100 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-4">
                            <!-- Imagen de tarjeta/finanzas desde internet -->
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=150&h=150&auto=format&fit=crop"
                                alt="Cuenta de Ahorros" class="account-icon rounded-circle me-3">
                            <div>
                                <h3 class="mb-1 text-dark">Cuenta de Ahorros</h3>
                                <p class="mb-0 text-muted">Administra tu dinero de forma segura y flexible.</p>
                            </div>
                        </div>
                        <hr class="w-25 border-blue mb-4">
                        <ul class="list-unstyled checklist blue-checks mb-0">
                            <li><i class="fa fa-check-circle me-2"></i>Depósitos y retiros libres</li>
                            <li><i class="fa fa-check-circle me-2"></i>Acceso rápido a tu dinero</li>
                            <li><i class="fa fa-check-circle me-2"></i>Ideal para uso diario</li>
                        </ul>
                        <!-- Imagen decorativa: Billetera/Ahorro -->
                        <img src="https://cdn-icons-png.flaticon.com/512/2845/2845892.png" alt="Billetera"
                            class="floating-illustration illustration-wallet">
                    </div>
                </div>
            </div>

            <!-- SECCIÓN INFERIOR: REQUISITOS -->
            <div class="row wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12">
                    <div class="requirements-panel bg-white shadow-lg rounded p-5 border-orange-bottom">
                        <div class="text-center mb-5">
                            <h2 class="display-6 text-dark mb-0">Requisitos para abrir tu cuenta</h2>
                            <hr class="w-25 mx-auto border-orange mt-3">
                        </div>

                        <div class="row g-4 text-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="icon-3d-wrapper mb-4">
                                    <i class="fa fa-id-card text-primary fs-1"></i>
                                </div>
                                <h5 class="text-dark">Cédula de identidad</h5>
                                <p class="text-muted small">Original y copia vigente.</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="icon-3d-wrapper mb-4">
                                    <i class="fa fa-file-invoice text-primary fs-1"></i>
                                </div>
                                <h5 class="text-dark">Papeleta de votación</h5>
                                <p class="text-muted small">Original y copia.</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="icon-3d-wrapper mb-4">
                                    <i class="fa fa-lightbulb text-primary fs-1"></i>
                                </div>
                                <h5 class="text-dark">Planilla de servicio</h5>
                                <p class="text-muted small">Agua, luz o teléfono.</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="icon-3d-wrapper mb-4 bg-success">
                                    <i class="fa fa-dollar-sign text-white fs-1"></i>
                                </div>
                                <h5 class="text-dark">Monto mínimo</h5>
                                <p class="text-muted small"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
         
@endsection