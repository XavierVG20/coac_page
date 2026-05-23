{{-- resources/views/admin/slider-categorias/create.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Nueva Categoría</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.slider-categorias.store') }}"
              method="POST">

            @csrf

            @include('admin.slider-categorias.form')

        </form>

    </div>

</div>

@endsection