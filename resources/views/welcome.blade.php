@extends('layouts.base')
@section('meta_title', 'Inicio')


@section('meta_description', $metaDescription)

@section('meta_keywords', $metaKeywords)
@section('content')
<!-- Carousel Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
           <a href="https://www.cosede.gob.ec/" target="_blank" rel="noopener noreferrer">

           <img class="w-100" src="{{ asset('img/Banner-Pagina-Web.png') }}" alt="Cooperativa Pujilí">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3 text-center" style="max-width: 900px;">
                    
                </div>
            </div>
           </a> 
        </div>
        <!-- Slide 2 -->
         @foreach($sliders as $slider)
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('uploads/sliders/'.$slider->imagen) }}" alt="{{ $slider->nombre }}">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3 text-center" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown" style="letter-spacing: 3px;">{{ $slider->nombre }}</h5>
                   <!-- <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $slider->meta_description }}</h1> -->
                    <div class="d-flex justify-content-center gap-3">
                       <!-- <a href="{{ route('servicios') }}" class="btn btn-warning py-md-3 px-md-5 animated slideInLeft shadow">Nuestros Servicios</a>
                        <a href="{{ route('contactos') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactos</a> -->
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<!-- Carousel End -->

<!-- Facts Start -->
<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0 shadow-sm">
            <!-- Bloque 1: Socios (Amarillo Brillante) -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded-circle" style="width: 65px; height: 65px;">
                        <i class="fa fa-users text-primary fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <p class="text-white mb-1 fw-bold">Socios Activos</p>
                        <h1 class="text-white mb-0 display-6 fw-bold" data-toggle="counter-up">{{ $totalSocios }}</h1>
                    </div>
                </div>
            </div>
            <!-- Bloque 2: Créditos (Dorado/Ocre) -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-warning-dark d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded-circle" style="width: 65px; height: 65px;">
                        <i class="fa fa-hand-holding-usd text-warning-dark fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <p class="text-dark-blue mb-1 fw-bold">Créditos Otorgados</p>
                        <h1 class="text-dark-blue mb-0 display-6 fw-bold" data-toggle="counter-up">{{ $totalCreditos }}</h1>
                    </div>
                </div>
            </div>
            <!-- Bloque 3: Agencias (Blanco) -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-white d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white shadow-sm d-flex align-items-center justify-content-center rounded-circle border" style="width: 65px; height: 65px;">
                        <i class="fa fa-map-marker-alt text-secondary fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <p class="text-muted mb-1 fw-bold">Nuestras Agencias</p>
                        <h1 class="text-dark mb-0 display-6 fw-bold" data-toggle="counter-up">{{ $totalAgencias }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->
<!-- Facts End -->

    <!-- About Start -->
    
    <div class="container-fluid py-5 about-payment-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- COLUMNA IZQUIERDA: SOBRE NOSOTROS -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-warning text-uppercase">Sobre Nosotros</h5>
                        <h1 class="mb-0">Cooperativa de Ahorro y Crédito Pujilí Ltda.</h1>
                    </div>
                  
                    <p class="text-muted mb-5">
                        {{ $info->descripcion }}
                    </p>

                    <!-- Cuadrícula de Beneficios -->
                    <div class="row g-3 mb-5">
                        <div class="col-sm-6">
                            <div class="benefit-card d-flex align-items-center p-3 bg-white shadow-sm rounded">
                                <div class="icon-box bg-warning-light rounded me-3">
                                    <i class="fa fa-users text-warning"></i>
                                </div>
                                <h6 class="mb-0">Atención personalizada</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-card d-flex align-items-center p-3 bg-white shadow-sm rounded">
                                <div class="icon-box bg-warning-light rounded me-3">
                                    <i class="fa fa-hand-holding-usd text-warning"></i>
                                </div>
                                <h6 class="mb-0">Créditos accesibles</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-card d-flex align-items-center p-3 bg-white shadow-sm rounded">
                                <div class="icon-box bg-warning-light rounded me-3">
                                    <i class="fa fa-shield-alt text-warning"></i>
                                </div>
                                <h6 class="mb-0">Seguridad financiera</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="benefit-card d-flex align-items-center p-3 bg-white shadow-sm rounded">
                                <div class="icon-box bg-warning-light rounded me-3">
                                    <i class="fa fa-rocket text-warning"></i>
                                </div>
                                <h6 class="mb-0">Apoyo a emprendedores</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Contacto -->
                    <div
                        class="contact-panel d-flex align-items-center justify-content-between p-4 bg-warning-subtle rounded-4">
                        <div class="d-flex align-items-center">
                            <div class="btn-lg-square bg-warning rounded-3 me-3 text-white shadow-sm">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div>
                                <p class="small mb-0 text-muted">Contáctanos</p>
                                <h4 class="mb-0 text-dark-blue fw-bold">{{ $info->telefono }}</h4>
                            </div>
                        </div>
                        <a href="{{ route('contactos') }}" class="btn btn-warning py-3 px-4 rounded-pill fw-bold text-dark shadow-sm">
                            Contáctanos <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                

                <!-- COLUMNA DERECHA: PAGO DE SERVICIOS -->
                <div class="col-lg-6" style="min-height: 500px;" data-wow-delay="0.5s">
    <div class="payment-card-main position-relative rounded-custom shadow-lg h-100 overflow-hidden">
        <!-- Imagen de fondo -->
        <img class="position-absolute w-100 h-100 wow zoomIn" 
             data-wow-delay="0.9s"
             src="{{ asset('img/cooperativa.jpg') }}" 
             style="object-fit: cover;">
        
        <!-- Capa de diseño decorativa (opcional, para emular el estilo de la imagen) -->
        <div class="design-overlay"></div>
    </div>
</div>
            </div>
        </div>
    </div>

    <!-- Productos Financieros End -->

    <div class="container-fluid py-5" style="background: linear-gradient(to bottom, #ffffff 80%, #F39C12 100%);">
        <div class="container py-5">

            <!-- TÍTULO -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInDown" data-wow-delay="0.2s"
                style="max-width: 700px;">
                <h5 class="fw-bold text-warning text-uppercase">Nuestros Productos</h5>
                <h1 class="mb-0">Descubre nuestros productos diseñados para ayudarte a alcanzar tus metas.</h1>
            </div>


            <div class="row g-4 justify-content-center">
                <!-- Producto 1: Créditos -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="product-card">
                        <div class="image-header">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=500&auto=format&fit=crop"
                                alt="Créditos">
                            <div class="floating-quote">
                                <p>"Haz realidad tus sueños, nosotros te apoyamos"</p>
                            </div>
                            <div class="badge-icon shadow">
                                <i class="fa fa-handshake"></i>
                            </div>
                        </div>
                        <div class="card-body-content text-center">
                            <h3 class="fw-bold">Créditos</h3>
                            <p class="text-muted px-3">Financiamiento para consumo, educación y emprendimiento con tasas
                                competitivas.</p>
                            <a href="{{ route('creditos') }}" class="btn-conoce-mas">Conoce más <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Producto 2: Cuentas de Ahorro -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="product-card">
                        <div class="image-header">
                            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=500&auto=format&fit=crop"
                                alt="Ahorros">
                            <div class="floating-quote">
                                <p>"Ahorra hoy, asegura tu mañana"</p>
                            </div>
                            <div class="badge-icon shadow">
                                <i class="fa fa-piggy-bank"></i>
                            </div>
                        </div>
                        <div class="card-body-content text-center">
                            <h3 class="fw-bold">Cuentas de Ahorro</h3>
                            <p class="text-muted px-3">Ahorra de forma segura y accede a tu dinero cuando lo necesites.</p>
                            <a href="{{ route('servicios') }}" class="btn-conoce-mas">Conoce más <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Producto 3: Inversiones -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-card">
                        <div class="image-header">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=500&auto=format&fit=crop"
                                alt="Inversiones">
                            <div class="floating-quote">
                                <p>"Invierte hoy, construye tu futuro"</p>
                            </div>
                            <div class="badge-icon shadow">
                                <i class="fa fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="card-body-content text-center">
                            <h3 class="fw-bold">Inversiones</h3>
                            <p class="text-muted px-3">Haz crecer tu dinero con opciones seguras y rentables para tu futuro.
                            </p>
                            <a href="{{ route('inversiones') }}" class="btn-conoce-mas">Conoce más <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Productos Financieros End -->
    <!-- AHORROS Start -->

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