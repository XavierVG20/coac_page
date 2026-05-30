<!-- Footer Start -->
<div class="container-fluid text-light mt-5 wow fadeInUp"  style="background: #334155; data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-12 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center  p-5">
                    <a href="index.html" class="navbar-brand">
                        <img src={{ asset('uploads/institucional/'.$info->imagen) }} alt="Logo">
                    </a>
                    <p class="mt-3 mb-4">
                        La cooperativa del pueblo.</p>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row gx-5">

                    <!-- CONTACTO -->
                    <div class="col-lg-6 col-md-12 pt-5 mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Contáctanos</h3>
                        </div>

                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            <p class="mb-0">{{ $info->direccion }}</p>
                        </div>

                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open me-2"></i>
                            <p class="mb-0">{{ $info->email }}</p>
                        </div>

                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone me-2"></i>
                            <p class="mb-0">{{ $info->telefono }}</p>
                        </div>

                        <!-- REDES -->
                        <div class="d-flex mt-4 wow zoomIn" data-wow-delay="0.5s">
                            <a class="btn btn-primary btn-warning me-2 social-hover" target="_blank" href="https://www.facebook.com/profile.php?id=100070768212221"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-warning me-2 social-hover" target="_blank" href="https://www.tiktok.com/@coacpujili"><i
                                    class="fab fa-tiktok"></i></a>
                            <a class="btn btn-primary btn-warning me-2 social-hover" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-warning social-hover" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Políticas -->
                    <div class="col-lg-5 col-md-12 pt-0 pt-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Mas Informacion</h3>
                        </div>

                        <div class="d-flex flex-column">
                            <a class="text-light mb-2 link-hover" target="_blank" href="{{ asset('docs/POLITICA-SARAS.pdf')  }}">Política SARAS</a>
                            <a class="text-light mb-2 link-hover" href="{{ route('quejas') }}">Quejas y Sugerencias</a>
                            <a class="text-light mb-2 link-hover" href="{{ route('aviso_privacidad') }}">Proteccion de Datos</a>
                            <a class="text-light mb-2 link-hover" href="#">Responsabilidad Social</a>
                            <a class="text-light link-hover" href="{{ route('contactos') }}">Contacto</a>
                        </div>
                    </div>

                    <!-- OTROS -->
                    <div class="col-lg-1 col-md-12 pt-0 pt-lg-5 mb-5 wow fadeInRight" data-wow-delay="0.7s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Servicios</h3>
                        </div>

                        <div class="d-flex flex-column">
                            <a class="text-light mb-2 link-hover" href="{{ route('creditos') }}">Créditos</a>
                            <a class="text-light mb-2 link-hover" href="{{ route('inversiones') }}">Inversiones</a>
                            <a class="text-light link-hover" href="{{ route('agencias') }}">Nuestras agencias</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-12 col-md-3">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">
                        &copy; 2026 <strong>Cooperativa Pujilí</strong> | Todos los derechos reservados
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->