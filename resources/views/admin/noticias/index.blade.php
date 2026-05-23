@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER (igual que categorías) -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title mb-0">Panel de Noticias</h3>

                <a href="{{ route('admin.noticias.create') }}"
                   class="btn btn-primary">
                    + Nueva noticia
                </a>
            </div>

            <!-- CARD (igual estructura categorías) -->
            <div class="bg-white redious-border p-3 p-sm-4">

                <!-- ALERT -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- BUSCADOR (estilo simple dentro del panel) -->
                <form method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text"
                               name="buscar"
                               value="{{ request('buscar') }}"
                               class="form-control"
                               placeholder="Buscar noticias...">

                        <button class="btn btn-outline-primary">
                            Buscar
                        </button>
                    </div>
                </form>

                <!-- TABLE -->
                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-warning">
                            <tr>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th style="width: 120px;">Imagen</th>
                                <th class="text-center" style="width: 200px;">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($noticias as $n)
                                <tr>

                                    <td class="fw-semibold">
                                        {{ $n->titulo }}
                                    </td>

                                    <td>
                                        {{ $n->categoria->nombre ?? 'Sin categoría' }}
                                    </td>

                                    <td>
                                        <img src="{{ asset('uploads/noticias/'.$n->imagen) }} "
                                             style="width: 70px; height: 50px; object-fit: cover;"
                                             class="rounded">
                                    </td>

                                    <td class="text-center">

                                        <a href="{{ route('admin.noticias.edit', $n) }}"
                                           class="btn btn-sm btn-outline-warning">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.noticias.destroy', $n) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('¿Eliminar esta noticia?')">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">
                                        No hay noticias registradas
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- PAGINACIÓN -->
                <div class="mt-3">
                    {{ $noticias->links() }}
                </div>

            </div>

        </div>
    </div>
</section>

@endsection