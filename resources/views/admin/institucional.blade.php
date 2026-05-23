@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="section-title mb-0">Información Institucional</h3>

            </div>

            <!-- CARD -->
            <div class="bg-white redious-border p-3 p-sm-4 shadow-sm">

               <div class="container">



    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

  <form method="POST" 
      action="{{ $info ? route('admin.institucional.update', $info->id) : route('admin.institucional.store') }}" 
      enctype="multipart/form-data">

    @csrf
    @if($info) @method('PUT') @endif

    <div class="container">

        {{-- FILA 1 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"
                       value="{{ $info->nombre ?? '' }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $info->email ?? '' }}">
            </div>
        </div>

        {{-- FILA 2 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Teléfono</label>
                <input type="text" name="telefono" class="form-control"
                       value="{{ $info->telefono ?? '' }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control"
                       value="{{ $info->direccion ?? '' }}">
            </div>
        </div>

        {{-- FILA 3 --}}
        <div class="row">
            <div class="col-md-12 mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $info->descripcion ?? '' }}</textarea>
            </div>
        </div>

        {{-- FILA 4 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Misión</label>
                <textarea name="mision" class="form-control" rows="4">{{ $info->mision ?? '' }}</textarea>
            </div>

            <div class="col-md-6 mb-3">
                <label>Visión</label>
                <textarea name="vision" class="form-control" rows="4">{{ $info->vision ?? '' }}</textarea>
            </div>
        </div>

        {{-- FILA 5 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Imagen Institucional</label>
                <input type="file" name="imagen" class="form-control">

                @if($info && $info->imagen)
                    <img src="{{ asset('uploads/institucional/'.$info->imagen) }}" width="120" class="mt-2">
                @endif
            </div>

            <div class="col-md-6 mb-3">
               
            </div>
        </div>

        {{-- FILA 6 (SEO) --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Meta Title</label>
                <input type="text" name="meta_title" class="form-control"
                       value="{{ $info->meta_title ?? '' }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Meta Description</label>
                <textarea name="meta_description" class="form-control" rows="3">{{ $info->meta_description ?? '' }}</textarea>
            </div>
        </div>

        {{-- BOTÓN --}}
        <div class="row">
            <div class="col-md-12 text-end">
                <button class="btn btn-primary">
                    {{ $info ? 'Actualizar Información' : 'Guardar Información' }}
                </button>
            </div>
        </div>

    </div>

</form>

</div>

            </div>

        </div>
    </div>
</section>

@endsection

