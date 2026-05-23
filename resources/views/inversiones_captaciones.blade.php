@extends('layouts.base')

@section('meta_title', 'Inversiones')

@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)
@section('content')


       <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>
<!-- INVERSIONES Start -->
<div class="container-fluid py-1 bg-white wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-1">

        <!-- TITULO -->
       
<div class="section-title text-center position-relative pb-3 mb-5 mx-auto wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h5 class="fw-bold text-warning text-uppercase">Inversiones Pujilí</h5>
                <h1 class="mb-0">Haz crecer tu dinero de forma segura</h1>
            </div>
    </div>
</div>

<!-- 🔹 BANNER -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.3s">

    <div class="row g-0 align-items-center">

        <!-- TEXTO -->
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
            <div class="inv-banner-text d-flex flex-column justify-content-center h-100 p-5">

                <div class="inv-highlight mb-4 wow zoomIn" data-wow-delay="0.5s">
                    Su dinero crecerá de manera segura y rentable.
                </div>

                <h1 class="mb-3 wow fadeInUp" data-wow-delay="0.6s">
                    INVIERTA CON <span class="text-warning">NOSOTROS</span>
                </h1>

                <p class="mb-4 wow fadeInUp" data-wow-delay="0.7s">
                    Obtenga tasas competitivas con respaldo y confianza institucional.
                </p>

                <div class="mb-4 wow fadeInUp" data-wow-delay="0.8s">
                    <p>✔ Tasas competitivas</p>
                    <p>✔ Seguridad garantizada</p>
                    <p>✔ Rentabilidad mensual</p>
                </div>

                <a href="#" class="btn btn-warning fw-bold px-4 py-2 wow zoomIn" data-wow-delay="0.9s">
                    Invertir ahora
                </a>

            </div>
        </div>

        <!-- IMAGEN -->
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
            <div class="inv-banner-img">
                <img src="{{ asset('img/inversion.jpg') }}" class="img-fluid w-75 h-75">
            </div>
        </div>

    </div>

</div>



<div class="container-fluid py-5 bg-light-gradient">
    <div class="container py-5">
        <div class="row g-5 align-items-stretch">
            
            <div class="col-lg-5 d-flex flex-column justify-content-between wow fadeInLeft" data-wow-delay="0.1s">
                <div class="section-title position-relative pb-3 mb-5">
                    <h6 class="text-warning text-uppercase fw-bold mb-2" style="letter-spacing: 1px;">Invierte hoy, asegura tu mañana</h6>
                    <h1 class="display-4 fw-bold text-dark-blue mb-4">Simulador <br><span class="text-warning">de Inversión</span></h1>
                </div>
                    <p class="text-muted mb-5">Calcula fácilmente el rendimiento de tu inversión y descubre cuánto puedes ganar con nosotros.</p>

                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="benefit-inv-card p-4 bg-white shadow-sm rounded-4">
                            <div class="icon-inv bg-primary-light mb-3"><i class="fa fa-chart-line text-dark-blue"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Alta Rentabilidad</h6>
                            <p class="small text-muted mb-0">Obtén las mejores tasas del mercado.</p>
                            <div class="mini-line"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="benefit-inv-card p-4 bg-white shadow-sm rounded-4">
                            <div class="icon-inv bg-warning-light mb-3"><i class="fa fa-shield-alt text-warning"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Seguridad Garantizada</h6>
                            <p class="small text-muted mb-0">Tu dinero protegido con el respaldo de nuestra cooperativa.</p>
                            <div class="mini-line"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="benefit-inv-card p-4 bg-white shadow-sm rounded-4">
                            <div class="icon-inv bg-success-light mb-3"><i class="fa fa-calendar-alt text-success"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Plazo Flexible</h6>
                            <p class="small text-muted mb-0">Elige el plazo que mejor se adapte a tus metas.</p>
                            <div class="mini-line"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="benefit-inv-card p-4 bg-white shadow-sm rounded-4">
                            <div class="icon-inv bg-info-light mb-3"><i class="fa fa-coins text-info"></i></div>
                            <h6 class="fw-bold text-dark-blue mb-2">Tu Futuro, Tu Decisión</h6>
                            <p class="small text-muted mb-0">Invierte hoy y haz mejor tu dinero con confianza.</p>
                            <div class="mini-line"></div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info border-0 shadow-sm p-3 rounded-3 d-flex align-items-start mb-0">
                    <i class="fa fa-info-circle text-info fs-5 me-3 mt-1"></i>
                    <small class="text-muted" style="font-size: 11px; line-height: 1.3;">
                        <strong>Nota:</strong> Los valores generados en este simulador de depósitos e inversiones son referenciales y pueden variar según las condiciones del mercado. Para mayor información, consulte con uno de nuestros asesores.
                    </small>
                </div>
            </div>

            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                <div class="simulator-main-box bg-white shadow-lg rounded-4 overflow-hidden h-100">
                    
                    <div class="simulator-header p-4 d-flex align-items-center">
                        <div class="header-icon-box me-3"><i class="fa fa-calculator fs-4 text-white"></i></div>
                        <h4 class="text-white mb-0 fw-bold">Simulador de Inversión</h4>
                    </div>

                    <div class="p-4 p-md-5">
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="fw-bold text-dark-blue small mb-2">Monto a invertir</label>
                                <div class="input-group input-custom-group">
                                    <span class="input-group-text bg-dark-blue text-white fw-bold border-0">$</span>
                                    <input type="number" id="invMonto" class="form-control border-0 p-3" value="10000" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="fw-bold text-dark-blue small mb-2">Plazo (meses)</label>
                                <select id="invPlazo" class="form-select border-0 input-custom-group p-3">
                                    <option value="6">6 meses</option>
                                    <option value="12" selected>12 meses</option>
                                    <option value="24">24 meses</option>
                                    <option value="36">36 meses</option>
                                    <option value="48">48 meses</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="fw-bold text-dark-blue small mb-2">Tasa anual (%)</label>
                            <div class="input-group input-custom-group align-items-center bg-light-input">
                                <input type="number" id="invTasa" class="form-control border-0 bg-transparent p-3" value="8.00" step="0.01">
                                <span class="badge bg-success-light text-success me-3 py-2 px-3 rounded-pill fw-bold" style="font-size: 12px;">Tasa fija</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="fw-bold text-dark-blue small mb-2">Selecciona un plazo rápido</label>
                            <div class="d-flex flex-wrap gap-2 justify-content-between fast-plazo-wrapper">
                                <button type="button" class="btn btn-fast-plazo" data-months="6">6 meses</button>
                                <button type="button" class="btn btn-fast-plazo active" data-months="12">12 meses</button>
                                <button type="button" class="btn btn-fast-plazo" data-months="24">24 meses</button>
                                <button type="button" class="btn btn-fast-plazo" data-months="36">36 meses</button>
                                <button type="button" class="btn btn-fast-plazo" data-months="48">48 meses</button>
                            </div>
                        </div>

                        <button type="button" onclick="calcularInversion()" class="btn btn-dark-blue w-100 fw-bold py-3 rounded-pill shadow-sm mb-5 transition">
                            <i class="fa fa-calculator me-2"></i> Calcular Inversion
                        </button>

                        <div class="results-display-panel p-4 rounded-4 text-center">
                            <h6 class="text-success fw-bold text-uppercase mb-4" style="letter-spacing: 1px;">➔ Tu inversión crecerá así ➔</h6>
                            
                            <div class="row g-3 align-items-center">
                                <div class="col-4">
                                    <div class="circle-result bg-success text-white mx-auto mb-2"><i class="fa fa-dollar-sign"></i></div>
                                    <p class="small text-muted mb-1">Monto invertido</p>
                                    <h5 class="fw-bold text-dark-blue mb-0" id="invMontoBase">$10,000.00</h5>
                                </div>
                                <div class="col-4 border-start border-end">
                                    <div class="circle-result bg-success text-white mx-auto mb-2"><i class="fa fa-chart-line"></i></div>
                                    <p class="small text-muted mb-1">Interés ganado</p>
                                    <h5 class="fw-bold text-success mb-0" id="invGanancia">$800.00</h5>
                                </div>
                                <div class="col-4">
                                    <div class="circle-result bg-success text-white mx-auto mb-2"><i class="fa fa-wallet"></i></div>
                                    <p class="small text-muted mb-1">Monto final</p>
                                    <h5 class="fw-bold text-success mb-0" id="invResultado">$0.00</h5>
                                </div>
                            </div>

                            <div class="row mt-4 pt-3 border-top g-2 text-muted small">
                                <div class="col-6 border-end text-center">
                                    <i class="fa fa-percentage me-2 text-success"></i>Tasa anual utilizada: <span id="resumenTasa" class="fw-bold text-dark-blue">8.00%</span>
                               </div>
                                <div class="col-6 text-center">
                                    <i class="fa fa-calendar-alt me-2 text-success"></i>Plazo: <span id="resumenPlazo" class="fw-bold text-dark-blue">12 meses</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-12">
                <div class="support-footer-bar bg-dark-blue rounded-4 p-4 d-flex flex-column flex-md-row align-items-center justify-content-between shadow-lg">
                    <div class="d-flex align-items-center mb-3 mb-md-0 text-center text-md-start">
                        <div class="icon-support-box me-3 d-none d-md-flex">
                            <i class="fa fa-headset text-warning fs-3"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-1">¿Tienes dudas?</h5>
                            <p class="text-white-50 mb-0 small">Nuestros asesores están listos para ayudarte en lo que necesites.</p>
                        </div>
                    </div>
                    <a href="" target="_blank" class="btn btn-warning py-3 px-4 rounded-pill fw-bold text-dark shadow-sm transition-btn">
                        <i class="fab fa-whatsapp me-2 fs-5 align-middle"></i> Hablar con un asesor
                    </a>
                </div>
            </div>
        </div>
@endsection