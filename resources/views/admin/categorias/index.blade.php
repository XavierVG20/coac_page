@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title mb-0">Panel de Categorías</h3>

                <a href="{{ route('admin.categorias.create') }}"
                   class="btn btn-primary">
                    + Nueva categoría
                </a>
            </div>

            <!-- CARD -->
            <div class="bg-white redious-border p-3 p-sm-4 shadow-sm">

                <!-- TABLE -->
                <div class="table-responsive">

                    <table class="table table-hover table-striped align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Nombre</th>
                                <th class="text-center" style="width: 200px;">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($categorias as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td class="fw-semibold">{{ $c->nombre }}</td>

                                    <td class="text-center">

                                        <a href="{{ route('admin.categorias.edit', $c) }}"
                                           class="btn btn-sm btn-outline-warning">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.categorias.destroy', $c) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('¿Eliminar esta categoría?')">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">
                                        No hay categorías registradas
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- PAGINACIÓN -->
                <div class="mt-3">
                    {{ $categorias->links() }}
                </div>

            </div>

        </div>
    </div>
</section>

@endsection