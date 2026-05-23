@extends('layouts.base')
@section('meta_title', 'Noticias')

@section('meta_description', $slider->meta_description )
@section('meta_keywords', $slider->meta_keywords)
@section('content')


       <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
        </div>

    <!-- CONTENIDO -->
    <div class="container py-5">
        <div class="row g-5">

            <!-- NOTICIAS -->
            <!-- NOTICIAS -->
            <div class="col-lg-8">
                <div class="row g-4">

                    @forelse($noticias as $n)

                        <div class="col-md-6 wow fadeInUp">
                            <div class="card border-0 shadow-sm h-100 blog-card">

                                <img src="{{ asset('uploads/noticias/' . $n->imagen) }}" class="card-img-top">

                                <div class="card-body">

                                    <span class="badge bg-success">
                                        {{ $n->categoria->nombre ?? 'Sin categoría' }}
                                    </span>

                                    <h5 class="fw-bold">{{ $n->titulo }}</h5>

                                    <p class="text-muted">
                                        {{ Str::limit($n->descripcion, 120) }}
                                    </p>
                                    <a class="text-uppercase" href="{{ route('noticia.show', $n->slug) }}">Ver mas <i class="bi bi-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>

                    @empty

                        <p>No hay noticias disponibles</p>

                    @endforelse

                </div>

                <div class="col-12 wow slideInUp" data-wow-delay="0.1s">

                    <nav aria-label="Page navigation">

                        <ul class="pagination pagination-lg m-0">

                            {{-- ANTERIOR --}}
                            @if ($noticias->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link rounded-0">
                                        <i class="bi bi-arrow-left"></i>
                                    </span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="{{ $noticias->previousPageUrl() }}">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                </li>
                            @endif


                            {{-- NÚMEROS --}}
                            @foreach ($noticias->getUrlRange(1, $noticias->lastPage()) as $page => $url)

                                <li class="page-item {{ $page == $noticias->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">
                                        {{ $page }}
                                    </a>
                                </li>

                            @endforeach


                            {{-- SIGUIENTE --}}
                            @if ($noticias->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="{{ $noticias->nextPageUrl() }}">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link rounded-0">
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </li>
                            @endif

                        </ul>

                    </nav>

                </div>
            </div>

            <!-- SIDEBAR -->
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

        </div>
    </div>

@endsection