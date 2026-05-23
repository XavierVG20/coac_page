@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title mb-0">Editar Noticia</h3>

                <a href="{{ route('admin.noticias.index') }}"
                   class="btn btn-secondary">
                    ← Volver
                </a>
            </div>

            <!-- CARD -->
            <div class="bg-white redious-border p-3 p-sm-4 shadow-sm">

                <form method="POST"
                      action="{{ route('admin.noticias.update', $noticia->id) }}"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row g-3">

                        <!-- TÍTULO -->
                        <div class="col-12">
                            <label class="form-label">Título</label>
                            <input type="text"
                                   name="titulo"
                                   class="form-control"
                                   value="{{ $noticia->titulo }}"
                                   required>
                        </div>

                        <!-- DESCRIPCIÓN -->
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion"
                                      class="form-control"
                                      rows="4">{{ $noticia->descripcion }}</textarea>
                        </div>

                        <!-- CATEGORÍA -->
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <select name="categoria_id" class="form-select">

                                @foreach($categorias as $c)
                                    <option value="{{ $c->id }}"
                                        @selected($noticia->categoria_id == $c->id)>
                                        {{ $c->nombre }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <!-- IMAGEN ACTUAL -->
                        <div class="col-md-6">
                            <label class="form-label">Imagen actual</label><br>

                            @if($noticia->imagen)
                                <img src="{{ asset('storage/' . $noticia->imagen) }}"
                                     class="img-thumbnail mb-2"
                                     style="width: 120px; height: 90px; object-fit: cover;">
                            @else
                                <p class="text-muted">Sin imagen</p>
                            @endif

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
                                   value="{{ $noticia->meta_title }}">
                        </div>

                        <!-- META DESCRIPTION -->
                        <div class="col-12">
                            <label class="form-label">Meta descripción</label>
                            <textarea name="meta_description"
                                      class="form-control"
                                      rows="3">{{ $noticia->meta_description }}</textarea>
                        </div>

                        <!-- ACTIVO -->
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox"
                                       name="activo"
                                       class="form-check-input"
                                       id="activo"
                                       {{ $noticia->activo ? 'checked' : '' }}>

                                <label class="form-check-label" for="activo">
                                    Activo
                                </label>
                            </div>
                        </div>

                        <!-- BOTÓN -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                Actualizar noticia
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

@endsection