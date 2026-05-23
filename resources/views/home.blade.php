{{-- resources/views/admin/dashboard.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}

    <div class="row mb-4">

        <div class="col-md-12">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h2 class="fw-bold mb-1">
                        Dashboard Administrativo
                    </h2>

                    <p class="text-muted mb-0">
                        Panel general del sistema web
                    </p>

                </div>

            </div>

        </div>

    </div>

    {{-- CARDS --}}

    <div class="row">

        {{-- AGENCIAS --}}

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm bg-primary text-white">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Total Agencias</h6>

                            <h2>
                                {{ $agencias }}
                            </h2>

                        </div>

                        <div>

                            <i class="las la-building la-3x"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- SLIDERS --}}

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm bg-success text-white">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Total Sliders</h6>

                            <h2>
                                {{ $sliders }}
                            </h2>

                        </div>

                        <div>

                            <i class="las la-images la-3x"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- CATEGORÍAS SLIDER --}}

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm bg-warning text-white">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Categorías Slider</h6>

                            <h2>
                                {{ $sliderCategorias }}
                            </h2>

                        </div>

                        <div>

                            <i class="las la-layer-group la-3x"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- NOTICIAS --}}

        <div class="col-md-3 mb-4">

            <div class="card border-0 shadow-sm bg-danger text-white">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Total Noticias</h6>

                            <h2>
                                {{ $noticias }}
                            </h2>

                        </div>

                        <div>

                            <i class="las la-newspaper la-3x"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- TABLAS --}}

    <div class="row">

        {{-- ÚLTIMAS AGENCIAS --}}

        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Últimas Agencias
                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-hover">

                        <thead>

                            <tr>

                                <th>Nombre</th>
                                <th>Ciudad</th>
                                <th>Estado</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($ultimasAgencias as $agencia)

                            <tr>

                                <td>
                                    {{ $agencia->nombre }}
                                </td>

                                <td>
                                    {{ $agencia->ciudad }}
                                </td>

                                <td>

                                    @if($agencia->estado)

                                        <span class="badge bg-success">
                                            Activo
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Inactivo
                                        </span>

                                    @endif

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- ÚLTIMOS SLIDERS --}}

        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Últimos Sliders
                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-hover">

                        <thead>

                            <tr>

                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Estado</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($ultimosSliders as $slider)

                            <tr>

                                <td>
                                    {{ $slider->nombre }}
                                </td>

                                <td>
                                    {{ $slider->categoria->nombre ?? '' }}
                                </td>

                                <td>

                                    @if($slider->estado)

                                        <span class="badge bg-success">
                                            Activo
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Inactivo
                                        </span>

                                    @endif

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    {{-- SEO PANEL --}}

    <div class="row">

        <div class="col-md-12">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        SEO General
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="border rounded p-3">

                                <h6>Meta Titles</h6>

                                <h3>
                                    {{ $seoTitles }}
                                </h3>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="border rounded p-3">

                                <h6>Meta Descriptions</h6>

                                <h3>
                                    {{ $seoDescriptions }}
                                </h3>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="border rounded p-3">

                                <h6>Keywords SEO</h6>

                                <h3>
                                    {{ $seoKeywords }}
                                </h3>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection