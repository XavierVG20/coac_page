@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title mb-0">Crear Noticia</h3>

                <a href="{{ route('admin.noticias.index') }}"
                   class="btn btn-secondary">
                    ← Volver
                </a>
            </div>

            <!-- CARD -->
            <div class="bg-white redious-border p-3 p-sm-4 shadow-sm">

                <form method="POST"
                      action="{{ route('admin.noticias.store') }}"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="row g-3">

                        <!-- TÍTULO -->
                        <div class="col-12">
                            <label class="form-label">Título</label>
                            <input type="text"
                                   name="titulo"
                                   class="form-control"
                                   placeholder="Título de la noticia"
                                   required>
                        </div>

                        <!-- DESCRIPCIÓN -->
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Contenido de la noticia"></textarea>
                        </div>

                        <!-- CATEGORÍA -->
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <select name="categoria_id" class="form-select" required>
                                <option value="">Seleccione una categoría</option>

                                @foreach($categorias as $c)
                                    <option value="{{ $c->id }}">
                                        {{ $c->nombre }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <!-- IMAGEN -->
                        <div class="col-md-6">
                            <label class="form-label">Imagen</label>
                            <input type="file"
                                   name="imagen"
                                   class="form-control">
                        </div>

                        <!-- META TITLE -->
                        <div class="col-12">
                            <label class="form-label">Meta título</label>
                            <input type="text"
                                   name="meta_title"
                                   class="form-control"
                                   placeholder="SEO title">
                        </div>

                        <!-- META DESCRIPTION -->
                        <div class="col-12">
                            <label class="form-label">Meta descripción</label>
                            <textarea name="meta_description"
                                      class="form-control"
                                      rows="3"
                                      placeholder="SEO description"></textarea>
                        </div>

                        <!-- ACTIVO -->
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox"
                                       name="activo"
                                       class="form-check-input"
                                       id="activo"
                                       checked>

                                <label class="form-check-label" for="activo">
                                    Activo
                                </label>
                            </div>
                        </div>

                        <!-- BOTÓN -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                Guardar noticia
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

@endsection