@extends('layouts.base')
@section('meta_title', 'Creditos')


@section('meta_description', $metaDescription)

@section('meta_keywords', $metaKeywords)
@section('content')
     <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>
    <!-- CREDITOS + SIMULADOR Start -->
       <div class="row g-4 bg-white shadow-lg rounded-pill p-4 mt-5 wow fadeIn" data-wow-delay="1.1s">
            <div class="col-lg-3 d-flex align-items-center justify-content-center border-end">
                <i class="fa fa-shield-alt text-warning fs-3 me-3"></i>
                <div><h6 class="mb-0 fw-bold">Seguridad</h6><small class="text-muted">Confianza total.</small></div>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center border-end">
                <i class="fa fa-clock text-warning fs-3 me-3"></i>
                <div><h6 class="mb-0 fw-bold">Aprobación Ágil</h6><small class="text-muted">Respuesta rápida.</small></div>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center border-end">
                <i class="fa fa-handshake text-warning fs-3 me-3"></i>
                <div><h6 class="mb-0 fw-bold">Asesoría</h6><small class="text-muted">Acompañamiento.</small></div>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                <i class="fa fa-star text-warning fs-3 me-3"></i>
                <div><h6 class="mb-0 fw-bold">Hecho para ti</h6><small class="text-muted">Opciones flexibles.</small></div>
            </div>
        </div>

        <br>

<div class="container-fluid py-5 custom-offer-section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/background-credito.jpg') }}');">
    <div class="container py-5">
        <!-- Título y Subtítulo con entrada desde arriba -->
        <div class=" section-title  position-relative pb-3  text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <div class=" d-flex align-items-center justify-content-center mb-2">
                <i class="fa fa-piggy-bank text-warning me-2"></i>
                <h5 class="text-warning text-uppercase mb-0 fw-bold">CRÉDITOS PUJILÍ</h5>
            </div>
            <h1 class="display-4 fw-bold text-white shadow-text">Elige el crédito ideal para ti</h1>
            
            <p class="text-white-50 lead">Opciones diseñadas para impulsar tus sueños y acompañarte en cada etapa.</p>
        </div>
         <!-- Tarjetas de Crédito -->
        <div class="row g-4 mb-5">
            <!-- Productivo -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="credit-card-modern shadow h-100">
                    <div class="credit-thumb">
                        <img src="{{ asset('img/credito1.jpg') }}" alt="Productivo">
                        <div class="credit-badge shadow"><i class="fa fa-chart-line text-warning"></i></div>
                    </div>
                    <div class="credit-body p-4 pt-5 text-center bg-white">
                        <h4 class="fw-bold text-dark-blue">Productivo</h4>
                        <p class="small text-muted">Financia tu negocio o emprendimiento.</p>
                        <ul class="list-unstyled text-start my-4">
                            <li><i class="fa fa-layer-group text-warning me-2"></i>Capital de trabajo</li>
                            <li><i class="fa fa-tools text-warning me-2"></i>Equipamiento</li>
                            <li><i class="fa fa-rocket text-warning me-2"></i>Impulsa tu crecimiento</li>
                        </ul>
                        <a href="#" class="btn-ver-mas text-warning">Ver más <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Consumo -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="credit-card-modern shadow h-100">
                    <div class="credit-thumb">
                        <img src="{{ asset('img/credito2.jpg') }}" alt="Consumo">
                        <div class="credit-badge shadow"><i class="fa fa-shopping-cart text-info"></i></div>
                    </div>
                    <div class="credit-body p-4 pt-5 text-center bg-white">
                        <h4 class="fw-bold text-dark-blue">Consumo</h4>
                        <p class="small text-muted">Para gastos personales y necesidades.</p>
                        <ul class="list-unstyled text-start my-4">
                            <li><i class="fa fa-check-circle text-info me-2"></i>Gastos personales</li>
                            <li><i class="fa fa-tv text-info me-2"></i>Electrodomésticos</li>
                            <li><i class="fa fa-plane text-info me-2"></i>Viajes y más</li>
                        </ul>
                        <a href="#" class="btn-ver-mas text-info">Ver más <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Educativo -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="credit-card-modern shadow h-100">
                    <div class="credit-thumb">
                        <img src="{{ asset('img/credito3.jpg') }}" alt="Educativo">
                        <div class="credit-badge shadow"><i class="fa fa-graduation-cap text-success"></i></div>
                    </div>
                    <div class="credit-body p-4 pt-5 text-center bg-white">
                        <h4 class="fw-bold text-dark-blue">Educativo</h4>
                        <p class="small text-muted">Invierte en tu formación profesional.</p>
                        <ul class="list-unstyled text-start my-4">
                            <li><i class="fa fa-book-open text-success me-2"></i>Carreras y posgrados</li>
                            <li><i class="fa fa-certificate text-success me-2"></i>Cursos y diplomados</li>
                            <li><i class="fa fa-user-graduate text-success me-2"></i>Desarrollo profesional</li>
                        </ul>
                        <a href="#" class="btn-ver-mas text-success">Ver más <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mano de Mujer -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="credit-card-modern shadow h-100">
                    <div class="credit-thumb">
                        <img src="{{ asset('img/credito3.jpg') }}" alt="Mano de Mujer">
                        <div class="credit-badge shadow"><i class="fa fa-female text-primary" style="color: #9b59b6 !important;"></i></div>
                    </div>
                    <div class="credit-body p-4 pt-5 text-center bg-white">
                        <h4 class="fw-bold text-dark-blue" style="color: #8e44ad !important;">Mano de Mujer</h4>
                        <p class="small text-muted">Apoyo a mujeres emprendedoras.</p>
                        <ul class="list-unstyled text-start my-4">
                            <li><i class="fa fa-star text-primary me-2" style="color: #9b59b6 !important;"></i>Impulsa tu negocio</li>
                            <li><i class="fa fa-heart text-primary me-2" style="color: #9b59b6 !important;"></i>Condiciones preferenciales</li>
                            <li><i class="fa fa-hands-helping text-primary me-2" style="color: #9b59b6 !important;"></i>Acompañamiento</li>
                        </ul>
                        <a href="#" class="btn-ver-mas" style="color: #8e44ad !important;">Ver más <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

     
    </div>
</div>
 <!-- Sección Simulador con Fondo Parallax y Carrusel -->
<div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.1s" 
     style="background:  url('{{ asset('img/simulador.png') }}') center center no-repeat; background-size: cover;">
    
    <div class="container py-5">
        <div class="row g-5 align-items-stretch">

            <!-- 🔹 LADO IZQUIERDO: CARRUSEL DE PROMOCIONES -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                <div id="creditCarousel" class="carousel slide h-100 shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                    
                    <!-- Indicadores (opcional) -->
                   

                    <div class="carousel-inner h-100">
                        <!-- Slide 1: Crédito Productivo -->
                        <div class="carousel-item active h-100">
                            <div class="banner-glass h-100 p-5 text-center  d-flex flex-column justify-content-center align-items-center">
                                <h2 class="fw-bold mb-0">Impulsa tu <span class="text-warning">negocio</span></h2>
                                <small class="text-uppercase tracking-wider">HOY MISMO</small>
                                <img src="{{ asset('img/credito1.png') }}" class="img-fluid my-4 rounded-3 shadow" style="max-height: 300px; object-fit: cover;">
                                <h1 class="display-5 fw-bold mb-0">CRÉDITO</h1>
                                <p class="small">y da el paso que necesitas para <strong>mejorar tu futuro.</strong></p>
                            </div>
                        </div>
  @foreach($sliders as $slider)
                        <!-- Slide 2: Crédito Consumo -->
                        <div class="carousel-item h-100">
                            <div class="banner-glass h-100 p-5 text-center  d-flex flex-column justify-content-center align-items-center">
                                <h2 class="fw-bold mb-0">{{ $slider->nombre }}</span></h2>
                                <small class="text-uppercase tracking-wider">MÁS CERCA DE TI</small>
                                <img src="{{ asset('uploads/sliders/'.$slider->imagen) }}" class="img-fluid my-4 rounded-3 shadow" style="max-height: 300px; object-fit: cover;">
                                <h1 class="display-5 fw-bold mb-0">{{ $slider->meta_title }}</h1>
                                <p class="small">{{ $slider->meta_description }}</p>
                            </div>
                        </div>
 @endforeach
                        <!-- Slide 3: Crédito Educativo -->
                        
                    </div>

                    <!-- Controles del Carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#creditCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#creditCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- 🔹 LADO DERECHO: SIMULADOR (Glassmorphism) -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <div class="simulador-box h-100 p-5 bg-glass shadow-lg rounded-4 border-white-20">
                    
                    <h4 class=" text-center mb-4 fw-bold text-dark-blue">
                        Simulador de Crédito
                        <div class="line-yellow-center mx-auto mt-2"></div>
                    </h4>

                    <div class="row">
                        <!-- FORMULARIO -->
                        <div class="col-md-6 border-end">
                            <div class="mb-3">
                                <label class="small fw-bold mb-1 text-muted"><i class="fa fa-tag me-1 text-warning"></i> Tipo de Crédito</label>
                                <select id="tipoCredito" class="form-select border-0 shadow-sm">
                                    <option value="">Seleccione...</option>
                                    <option value="productivo">Pujili Productivo (21%)</option>
                                    <option value="agil">Pujili Agil (23%)</option>
                                    <option value="consumo">Consumo (15.60%)</option>
                                    <option value="educativo">Educativo (9%)</option>
                                    <option value="mujer">Mano de Mujer (19%)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="small fw-bold mb-1 text-muted"><i class="fa fa- university me-1 text-warning"></i> Amortización</label>
                                <select id="tipoAmortizacion" class="form-select border-0 shadow-sm">
                                    <option value="francesa">Francesa</option>
                                    <option value="alemana">Alemana</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="small fw-bold mb-1 text-muted"><i class="fa fa-dollar-sign me-1 text-warning"></i> Monto ($)</label>
                                <input type="number" id="monto" class="form-control border-0 shadow-sm" placeholder="Ej: 5000">
                            </div>

                            <div class="mb-3">
                                <label class="small fw-bold mb-1 text-muted"><i class="fa fa-calendar-alt me-1 text-warning"></i> Plazo (meses)</label>
                                <input type="number" id="plazo" class="form-control border-0 shadow-sm" placeholder="Ej: 12">
                            </div>

                            <button onclick="calcularCredito()" class="btn btn-warning w-100 fw-bold py-3 rounded-pill shadow mt-3">
                                <i class="fa fa-calculator me-2"></i> Calcular
                            </button>
                        </div>

                        <!-- RESULTADOS -->
                        <div class="col-md-6 d-flex flex-column justify-content-center text-center p-4">
                            <h6 class="text-muted text-uppercase small mb-4">Resultados estimados</h6>
                            
                            <p class="mb-0 text-muted small">Cuota mensual</p>
                            <h2 id="cuota" class="fw-bold text-danger mb-4">$0.00</h2>

                            <p class="mb-0 text-muted small">Total a pagar</p>
                            <h4 id="total" class="fw-bold text-dark-blue">$0.00</h4>

                            <div class="alert alert-info py-2 px-3 mt-4 mb-0" style="font-size: 10px; border: none; border-left: 4px solid #0dcaf0;">
                                <i class="fa fa-info-circle me-1"></i>
                                <strong>Nota:</strong> Los resultados obtenidos mediante este simulador son solo estimaciones, y no constituyen una oferta vinculante. Los usuarios deben confirmar cualquier información importante directamente con uno de nuestros asesores ante cualquier duda.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- CREDITOS + SIMULADOR End -->

@endsection