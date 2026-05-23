@extends('layouts.base')

@section('meta_title', 'Nuestras Agencias')

@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)
@section('content')


       <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>

    <!-- AGENCIAS Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">

            <!-- TÍTULO -->
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-warning text-uppercase">Nuestras Agencias</h5>
                <h1>Encuentra la agencia más cercana</h1>
                <p>Contamos con presencia en diferentes ciudades para brindarte atención personalizada.</p>
            </div>

            <!-- LISTADO -->
            <div class="row g-4">
   @foreach($agencias as $agencia)
                <!-- AGENCIA -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card border-0 shadow h-100 agencia-card">
                        <img src="{{ asset('uploads/agencias/'.$agencia->imagen) }}" class="card-img-top" alt="Agencia Pujilí">

                        <div class="card-body">
                            <h5 class="card-title">{{ $agencia->nombre }}</h5>

                            <p class="mb-2">
                                <i class="bi bi-geo-alt text-warning me-2"></i>
                                {{ $agencia->direccion }}
                            </p>

                            <p class="mb-2">
                                <i class="bi bi-clock text-warning me-2"></i>
                               {{ $agencia->horario }}
                            </p>

                            <p class="mb-3">
                                <i class="bi bi-telephone text-warning me-2"></i>
                                {{ $agencia->telefono }}
                            </p>

                            <a href="{{ $agencia->mapa_google }}"   target="_blank" class="btn btn-warning w-100">Ver ubicación</a>
                        </div>
                    </div>
                </div>
   @endforeach
                <!-- AGENCIA -->
            

             

            </div>

        </div>
    </div>
    <!-- AGENCIAS End -->
@endsection