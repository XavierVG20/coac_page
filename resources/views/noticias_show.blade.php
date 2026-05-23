@extends('layouts.base')

@section('content')
   <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('uploads/noticias/' . $noticia->imagen) }}" alt="">
                        <h1 class="mb-4">{{ $noticia->titulo }}</h1>
                        <p>{{ $noticia->descripcion }}</p>
                        
                    </div>
                    <!-- Blog Detail End -->
    

                </div>
    
                <!-- Sidebar Start -->
                 <div class="col-lg-4">

                <!-- BUSCADOR -->
                <div class="mb-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="input-group shadow-sm">
                        <input type="text" class="form-control" placeholder="Buscar noticias...">
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>

                <!-- CATEGORÍAS -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categorias</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        @foreach($categorias as $c)
                            <a href="{{ route('noticia', ['categoria' => $c->id]) }}"
                                class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2">
                                <i class="bi bi-arrow-right me-2"></i>
                                {{ $c->nombre }}
                        </a> @endforeach
                        <a href="{{ route('noticia') }}" class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2">
                            <i class="bi bi-arrow-right me-2"></i>
                            Todos
                        </a>
                    </div>
                </div>
                <!-- POSTS RECIENTES -->
                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Noticias Recientes</h3>
                    </div>
                    @foreach($noticias->take(3) as $r)

                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{ asset('uploads/noticias/' . $r->imagen) }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="{{ route('noticia.show', $r->slug) }}"
                                class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{ $r->titulo }}
                            </a>
                        </div>

                    @endforeach
                </div>
                <!-- Recent Post End -->


            </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection