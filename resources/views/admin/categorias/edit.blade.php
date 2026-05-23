@extends('layouts.app')

@section('content')





<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER -->
            <div class="header-top d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title">Editar Categoría</h3>
            </div>

            <!-- CONTENIDO -->
            <div class="bg-white redious-border p-20 p-sm-30 pt-sm-30">

                <div class="container">

                    <div class="card shadow-sm">
                        <div class="card-header bg-warning">
                            <h5 class="mb-0">Actualizar categoría</h5>
                        </div>

                        <div class="card-body">

                            <form method="POST"
                                  action="{{ route('admin.categorias.update', $categoria->id) }}">

                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="nombre" class="form-label">
                                        Nombre de la categoría
                                    </label>

                                    <input type="text"
                                           id="nombre"
                                           name="nombre"
                                           class="form-control"
                                           value="{{ $categoria->nombre }}"
                                           placeholder="Ej: Tecnología, Hogar, Deportes"
                                           required>
                                </div>

                                <div class="d-flex justify-content-end gap-2">

                                    <a href="{{ route('admin.categorias.index') }}"
                                       class="btn btn-secondary">
                                        Cancelar
                                    </a>

                                    <button type="submit" class="btn btn-success">
                                        Actualizar
                                    </button>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection