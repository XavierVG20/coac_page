{{-- resources/views/admin/slider-categorias/edit.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Editar Categoría</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.slider-categorias.update',$categoria->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            @include('admin.slider-categorias.form')

        </form>

    </div>

</div>

@endsection